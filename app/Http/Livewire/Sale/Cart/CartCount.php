<?php

namespace App\Http\Livewire\Sale\Cart;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;

class CartCount extends Component
{
    protected $listeners = [
        'cartAdded' => '$refresh',
        'cartRemoved' => '$refresh'
    ];

    public function render()
    {
        $guestId = Cookie::get('guest_id');

        if (is_null($guestId)) {
            Cookie::queue('guest_id', time() . '_' . Str::uuid(), 60);
        }

        return view('livewire.sale.cart.cart-count', [
            'cartCount' => auth()->user()->carts->sum('qty')
        ]);
    }
}
