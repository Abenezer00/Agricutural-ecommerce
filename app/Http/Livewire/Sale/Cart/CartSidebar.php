<?php

namespace App\Http\Livewire\Sale\Cart;

use App\Models\Cart;
use Livewire\Component;

class CartSidebar extends Component
{

    protected $listeners = [
        'cartAdded' => '$refresh',
        'deliveryPriceSet' => 'setDeliveryPrice',
        'checkout',
    ];

    public $isCheckoutEnabled = true;
    public $cartTitle = "Shopping cart";
    public $showSubTotal = false;
    public $deliveryMethod;
    public $orderMinimumNoticeCart = false;

    public function render()
    {
        return view('livewire.sale.cart.cart-sidebar', [
            'carts' => auth()->user()->carts
        ]);
    }


    public function removeFromCart($cartId, $productName)
    {
        Cart::destroy($cartId);
        $this->emit('cartRemoved');
        $this->dispatchBrowserEvent('notice-toast', [
            'type' => 'success',
            'message' => $productName . ' removed from cart successfully.'
        ]);
    }

    public function setQuantity($op, $cart)
    {
        $cart = Cart::find($cart['id']);
        if ($op == '-' && $cart->qty > 1) {
            $cart->decrement('qty');
        } else if ($op == '+' && ($cart->product->qty >= $cart->qty + 1)) {
            $cart->increment('qty');
        }
    }

    public function checkout()
    {
        $minCheckout = 500;

        if ($minCheckout <= auth()->user()->carts->sum(fn ($cart) => $cart->product->price * $cart->qty)) {
            return redirect()->route('checkout');
        } else {
            $this->orderMinimumNoticeCart = true;
            session()->flash('order-minimum', "Minimum order amount is Br " . number_format($minCheckout, 2));
        }
    }
}
