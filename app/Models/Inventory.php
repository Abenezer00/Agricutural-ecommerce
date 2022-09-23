<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event', 'initial_qty', 'initial_price', 'current_qty', 'current_price',
        'qty_difference', 'price_difference'
    ];



    /**
     * Relations
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
