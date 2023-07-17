<?php

declare(strict_types=1);

namespace App\UseCases\Day;

use App\Models\Product;
use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class ShowProductAction
{
    /**
     * @param Sales $sales
     * @param Product $product
     * @param Carbon $date
     * @return Collection
     */
    public function __invoke(Sales $sales, Product $product, Carbon $date): Collection
    {
        $ids = $sales->query()
            ->whereDate('dateTime', '=', $date)
            ->pluck('product_id');

        return $product->query()
            ->whereIn('id', $ids)
            ->get();
    }
}
