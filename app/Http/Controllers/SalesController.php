<?php

namespace App\Http\Controllers;

use App\Http\Resources\DailySalesResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\StoreResource;
use App\Models\Product;
use App\Models\Sales;
use App\Models\Store;
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
     * @param Sales $sales
     * @param Store $store
     * @param Product $product
     * @param ShowSalesAction $salesAction
     * @param ShowStoreAction $storeAction
     * @param ShowProductAction $productAction
     * @return JsonResponse
     */
    public function showByDate(
        int $year,
        int $month,
        int $day,
        Sales $sales,
        Store $store,
        Product $product,
        ShowSalesAction $salesAction,
        ShowStoreAction $storeAction,
        ShowProductAction $productAction,
    ): JsonResponse {
        $date = Carbon::create($year, $month, $day);
        return response()->json(data: [
            'sales' => DailySalesResource::collection($salesAction($sales, $date)),
            'store' => StoreResource::collection($storeAction($sales, $store, $date)),
            'product' => ProductResource::collection($productAction($sales, $product, $date)),
        ]);
    }
}
