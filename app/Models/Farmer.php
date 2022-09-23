<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Farmer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fba_id', 'name', 'phone_number', 'state', 'zone', 'address',
        'longitude', 'latitude', 'total_land_size', 'currently_free_land_size',
        'currently_occupied_land_size', 'soil_types'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'soil_types' => 'array',
    ];

    /**
     * Relations
     */

    public function fba()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
