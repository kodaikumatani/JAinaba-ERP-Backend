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
     * @param Carbon $date
     * @return Collection
     */
    public function __invoke(Carbon $date): Collection
    {
        $ids = Sales::query()
            ->whereDate('dateTime', '=', $date)
            ->pluck('store_id');

        return Store::query()
            ->whereIn('id', $ids)
            ->get();
    }
}
