<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DailySalesResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'date' => date('Y-m-d', $this->resource->date),
            'hour' => $this->resource->hour,
            'store_id' => $this->resource->store_id,
            'product_id' => $this->resource->product_id,
            'quantity' => $this->resource->quantity,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
