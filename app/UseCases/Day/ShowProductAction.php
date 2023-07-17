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
     * @param Carbon $date
     * @return Collection
     */
    public function __invoke(Carbon $date): Collection
    {
        $ids = Sales::query()
            ->whereDate('dateTime', '=', $date)
            ->pluck('product_id');

        return Product::query()
            ->whereIn('id', $ids)
            ->get();
    }
}
