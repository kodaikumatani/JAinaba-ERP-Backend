<?php

declare(strict_types=1);

namespace App\UseCases\Day;

use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class ShowSalesAction
{
    /**
     * @param Carbon $date
     * @return Collection
     */
    public function __invoke(Carbon $date): Collection
    {
        return Sales::query()
            ->whereDate('dateTime', '=', $date)
            ->get();
    }
}
