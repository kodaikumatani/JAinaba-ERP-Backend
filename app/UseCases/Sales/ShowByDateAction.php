<?php

namespace App\UseCases\Sales;

use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class ShowByDateAction
{
    /**
     * @param Sales $sales
     * @param Carbon $date
     * @return Collection
     */
    public function __invoke(Sales $sales, Carbon $date): Collection
    {
        return $sales->FindByDate($date);
    }
}
