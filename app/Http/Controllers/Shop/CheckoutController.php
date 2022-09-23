<?php

namespace App\Http\Controllers\Shop;

use App\Models\Sale\Cart;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{

    public function checkout()
    {
        if (auth()->user()->carts->count() > 0) {
            return view('shop.checkout.checkout-form');
        } else {
            return redirect()->route('shop.index');
        }
    }
}
