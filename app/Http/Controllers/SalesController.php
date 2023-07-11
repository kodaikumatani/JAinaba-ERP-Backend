<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\UseCases\Sales\ShowByDateAction;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function showByDate(
        int $year,
        int $month,
        int $day,
        Sales $sales,
        ShowByDateAction $action
    ): array {
        $date = date('Y-m-d', strtotime($year . '/' . $month . '/' . $day));
        return $action($sales, $date);
    }
}
