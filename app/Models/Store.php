<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
    ];

    /**
     * Retrieve a model by its primary key
     *
     * @param int $id
     * @return Store
     */
    public function findByID(int $id): Store
    {
        $store = self::query()->find($id);

        return new Store($id, $store->name);
    }
}
