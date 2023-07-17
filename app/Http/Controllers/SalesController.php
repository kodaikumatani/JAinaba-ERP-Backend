<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\DailySalesResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\StoreResource;
use App\UseCases\Day\ShowProductAction;
use App\UseCases\Day\ShowSalesAction;
use App\UseCases\Day\ShowStoreAction;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class SalesController extends Controller
{
    /**
     * @param int $year
     * @param int $month
     * @param int $day
     * @param ShowSalesAction $salesAction
     * @param ShowStoreAction $storeAction
     * @param ShowProductAction $productAction
     * @return JsonResponse
     */
    public function showByDate(
        int $year,
        int $month,
        int $day,
        ShowSalesAction $salesAction,
        ShowStoreAction $storeAction,
        ShowProductAction $productAction,
    ): JsonResponse {
        $date = Carbon::create($year, $month, $day);
        return response()->json(data: [
            'sales' => DailySalesResource::collection($salesAction($date)),
            'store' => StoreResource::collection($storeAction($date)),
            'product' => ProductResource::collection($productAction($date)),
        ]);
    }
}
