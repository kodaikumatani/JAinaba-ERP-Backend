<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $dateTime
 * @property int $hour
 * @property int $user_id
 * @property int $store_id
 * @property int $product_id
 * @property int $quantity
 * @property int $store_total
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
        'quantity' => 'integer',
        'store_total' => 'integer',
    ];

    /**
     * @param string $date
     * @return Sales[]
     */
    public function FindByDate(string $date): array
    {
        return self::query()->whereDate('dateTime', $date)->get();
    }
}
