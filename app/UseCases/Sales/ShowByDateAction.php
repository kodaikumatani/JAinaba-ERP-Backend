<?php

namespace App\UseCases\Sales;

use App\Models\Sales;

class ShowByDateAction
{
    /**
     * @param Sales $sales
     * @param string $date
     * @return Sales[]
     */
    public function __invoke(Sales $sales, string $date): array
    {
        return $sales->FindByDate($date);
    }
}
