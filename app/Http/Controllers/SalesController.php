<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\UseCase\Sales\ShowByDateAction;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function showByDate(
        int $year, 
        int $month, 
        int $day, 
        Sales $sales,
        ShowByDateAction $action
    ): Sales
    {
        $date = $year . '/' . $month . '/' . $day;
        return $action($sales, $date);
    }
}
