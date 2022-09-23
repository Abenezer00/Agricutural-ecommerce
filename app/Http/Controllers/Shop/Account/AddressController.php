<?php

namespace App\Http\Controllers\Shop\Account;

use App\Http\Controllers\Controller;
use App\Models\Sale\Checkout\DeliveryAddress;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->flash('seo.title', 'Addresses');
        return view('shop.account.address.index');
    }
}
