<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

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
     * @param Carbon $date
     * @return Collection
     */
    public function FindByDate(Carbon $date): Collection
    {
        return self::query()->whereDate('dateTime', $date)->get();
    }
}
