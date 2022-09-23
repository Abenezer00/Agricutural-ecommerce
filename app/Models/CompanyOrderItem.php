<?php

namespace App\Models;

use App\Models\CompanyOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyOrderItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_order_id', 'product_id', 'qty', 'unit_price'
    ];

    /**
     * Relations
     */

    public function companyOrder()
    {
        return $this->belongsTo(CompanyOrder::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
