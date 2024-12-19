<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Exports\RevenueExport;
use Maatwebsite\Excel\Facades\Excel;
class exportRevenueController extends Controller
{
    public function exportRevenue()
    {

        return Excel::download(new RevenueExport, 'doanh_thu.xlsx');
    }
}