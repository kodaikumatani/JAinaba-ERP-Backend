<?php

declare(strict_types=1);

namespace App\UseCases\Day;

use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class ShowSalesAction
{
    /**
     * @param Sales $sales
     * @param Carbon $date
     * @return Collection
     */
    public function __invoke(Sales $sales, Carbon $date): Collection
    {
        return $sales->query()
            ->whereDate('dateTime', $date)
            ->get();
    }
}
