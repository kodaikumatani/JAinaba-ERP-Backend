<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\UseCases\Sales\ShowByDateAction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SalesController extends Controller
{
    public function showByDate(
        int $year,
        int $month,
        int $day,
        Sales $sales,
        ShowByDateAction $action
    ): Collection {
        $date = Carbon::create($year, $month, $day);
        return $action($sales, $date);
    }
}
