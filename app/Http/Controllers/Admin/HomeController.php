<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\Post;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show dashboard admin manager
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index() {
        $totalUser = User::count();
        $totalPost = Post::count();
        $totalProduct = Product::count();
        $totalOrder = Order::where('status', OrderStatus::ORDER_SUCCESS)->count();
        $totalCancel = Order::where('status', OrderStatus::CANCEL_ORDER)->count();
        $totalRevenue = Order::where('status', OrderStatus::ORDER_SUCCESS)->sum('total');

        $datetime = Carbon::now()->subMonth();
        $dataChart = Order::selectRaw('DAY(created_at) as day, SUM(total) as total')
            ->whereDate('created_at', '>', $datetime)
            ->where('status', OrderStatus::ORDER_SUCCESS)
            ->groupBy(DB::raw('DAY(created_at)'))
            ->get()
            ->keyBy('day');
        $dataRevenueMonth = [];
        $now = Carbon::now();
        while ($datetime->addDay()->lessThan($now)) {
            $temp = (object)[
                'day' => $datetime->day,
                'total' => isset($dataChart[$datetime->day]) ? $dataChart[$datetime->day]->total : 0,
            ];
            array_push($dataRevenueMonth, $temp);
        }

        return view('admin.home.index', [
            'totalUser' => $totalUser,
            'totalOrder' => $totalOrder,
            'totalCancel' => $totalCancel,
            'totalPost' => $totalPost,
            'totalProduct' => $totalProduct,
            'totalRevenue' => $totalRevenue,
            'dataRevenueMonth' => $dataRevenueMonth,
        ]);
    }
    public function index2(Request $request)
{
    // Thống kê doanh thu theo ngày
    $todayRevenue = Order::where('status', OrderStatus::ORDER_SUCCESS)
        ->whereDate('created_at', Carbon::today())
        ->sum('total');

    $yesterdayRevenue = Order::where('status', OrderStatus::ORDER_SUCCESS)
        ->whereDate('created_at', Carbon::yesterday())
        ->sum('total');

    $thisWeekRevenue = Order::where('status', OrderStatus::ORDER_SUCCESS)
        ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
        ->sum('total');

    $thisMonthRevenue = Order::where('status', OrderStatus::ORDER_SUCCESS)
        ->whereMonth('created_at', Carbon::now()->month)
        ->whereYear('created_at', Carbon::now()->year)
        ->sum('total');
        $selectedMonth = $request->input('month', Carbon::now()->month);
        $selectedYear = $request->input('year', Carbon::now()->year);

        // Thống kê doanh thu theo ngày cho tháng và năm đã chọn
        $datetime = Carbon::createFromDate($selectedYear, $selectedMonth, 1)->startOfMonth();
        $endDate = Carbon::createFromDate($selectedYear, $selectedMonth, 1)->endOfMonth();

        $dataChart = Order::selectRaw('DAY(created_at) as day, MONTH(created_at) as month, YEAR(created_at) as year, SUM(total) as total')
            ->whereBetween('created_at', [$datetime, $endDate])
            ->where('status', OrderStatus::ORDER_SUCCESS)
            ->groupBy(DB::raw('DAY(created_at)'), DB::raw('MONTH(created_at)'), DB::raw('YEAR(created_at)'))
            ->get()
            ->keyBy(function ($item) {
                return $item->day;
            });

        // Chuẩn bị dữ liệu doanh thu theo ngày trong tháng
        $dataRevenueMonth = [];
        $currentDay = $datetime;
        while ($currentDay->lte($endDate)) {
            $temp = (object)[
                'day' => $currentDay->day,
                'month' => $currentDay->month,
                'year' => $currentDay->year,
                'total' => isset($dataChart[$currentDay->day]) ? $dataChart[$currentDay->day]->total : 0,
            ];
            array_push($dataRevenueMonth, $temp);
            $currentDay->addDay();
        }


    // Doanh thu theo từng tháng
    $dataRevenueByMonth = Order::selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, SUM(total) as total')
        ->where('status', OrderStatus::ORDER_SUCCESS)
        ->groupBy(DB::raw('MONTH(created_at)'), DB::raw('YEAR(created_at)'))
        ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
        ->orderBy(DB::raw('MONTH(created_at)'), 'desc')
        ->limit(6) // Fetch last 6 months, adjust as needed
        ->get();

    return view('admin.home.index2', [
        'todayRevenue' => $todayRevenue,
        'yesterdayRevenue' => $yesterdayRevenue,
        'thisWeekRevenue' => $thisWeekRevenue,
        'thisMonthRevenue' => $thisMonthRevenue,
        'dataRevenueMonth' => $dataRevenueMonth, // Add this line
        'dataRevenueByMonth' => $dataRevenueByMonth,
        'selectedMonth' => $selectedMonth,
        'selectedYear' => $selectedYear,
    ]);
}
}