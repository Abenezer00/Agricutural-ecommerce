<?php

namespace App\Models;

use App\Models\User;
use App\Models\Farmer;
use App\Models\CompanyOrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyOrder extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fba_id', 'farmer_id', 'company_name', 'company_phone_number', 'contact_person_name',
        'contact_person_phone_number', 'company_state', 'company_city', 'company_address',
        'uuid', 'total_price', 'status', 'notes', 'for_when'
    ];

    /**
     * Relations
     */

    public function fba()
    {
        return $this->belongsTo(User::class, 'fba_id');
    }

    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }

    public function companyOrderItems()
    {
        return $this->hasMany(CompanyOrderItem::class, 'company_order_id');
    }
}
