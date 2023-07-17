<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dateTime',
        'producer_code',
        'producer',
        'store',
        'product',
        'price',
        'quantity',
        'store_total'
    ];

     /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'dateTime' => 'datetime',
        'producer_code' => 'integer',
        'producer' => 'string',
        'store' => 'string',
        'product' => 'string',
        'price' => 'integer',
        'quantity' => 'integer',
        'store_total' => 'integer'
    ];
}
