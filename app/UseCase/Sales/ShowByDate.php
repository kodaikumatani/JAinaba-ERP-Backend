<?php

namespace App\UseCase\Sales;

use App\Models\Sales;

class ShowByDate
{
    public function __invoke(Sales $sales, string $date): Sales
    {
        return $sales->FindByDate($date);
    }
}