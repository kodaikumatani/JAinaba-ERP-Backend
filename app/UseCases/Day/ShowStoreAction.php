<?php

declare(strict_types=1);

namespace App\UseCases\Day;

use App\Models\Sales;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class ShowStoreAction
{
    /**
     * @param Sales $sales
     * @param Store $store
     * @param Carbon $date
     * @return Collection
     */
    public function __invoke(Sales $sales, Store $store, Carbon $date): Collection
    {
        $ids = $sales->query()
            ->whereDate('dateTime', $date)
            ->pluck('store_id');

        return $store->query()
            ->whereIn('id', $ids)
            ->get();
    }
}
