<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property $dateTime
 * @property $hour
 * @property $user_id
 * @property $store_id
 * @property $product_id
 * @property $quantity
 * @property $store_total
 */
class Sales extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dateTime',
        'hour',
        'user_id',
        'store_id',
        'product_id',
        'quantity',
        'store_total',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'dateTime' => 'date',
        'hour' => 'integer',
        'user_id' => 'integer',
        'store_id' => 'integer',
        'product_id' => 'integer',
        'qunatity' => 'integer',
        'store_total' => 'integer',
    ];

    /**
     * @param string $date
     * @return array<Sales>
     */
    public function FindByDate($date): array
    {
        return $this->whereDate('dateTime', $date)->get();
    }
}
