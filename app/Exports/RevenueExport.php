<?php

namespace App\Exports;

use App\Models\Order;
use App\Enums\OrderStatus;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class RevenueExport implements FromCollection, WithHeadings, WithTitle
{
    public function collection()
    {
        // Lấy dữ liệu doanh thu (bạn có thể thay đổi theo cấu trúc dữ liệu của mình)
        return Order::selectRaw('DAY(created_at) as day, MONTH(created_at) as month, YEAR(created_at) as year, SUM(total) as total')
            ->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
            ->where('status', OrderStatus::ORDER_SUCCESS)
            ->groupBy('day', 'month', 'year')
            ->get()
            ->map(function ($item) {
                return [
                    'Ngày' => $item->day . '/' . $item->month . '/' . $item->year,
                    'Doanh thu' => number_format($item->total, 0, ',', '.') . ' VND',
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Ngày',
            'Doanh thu',
        ];
    }

    public function title(): string
    {
        return 'Doanh Thu Theo Ngày';
    }
}