<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Cookie;


class ProductShow extends Component
{
    public $product;
    public $selectedQuantity = 1;
    public  $selectedImageUrl;
    public $allowedToAddToCart = false;
    public $allowedToBuyNow = false;

    public $orderMinimumNoticeProductShow = false;

    public function mount()
    {
        $this->selectedImageUrl =  $this->product->media[0]->getFullUrl();
    }


    public function render()
    {
        return view('livewire.product-show');
    }


    public function setImage($index)
    {
        $this->selectedImageUrl = $this->product->media[$index]->getFullUrl();
    }

    public function addToCart()
    {

        $guestId = Cookie::get('guest_id');

        $prevCart = Cart::where('product_id', $this->product->id);

        if ($userId = auth()->id()) {
            $prevCart->where('user_id', $userId);
        } elseif (!is_null($guestId)) {
            $prevCart->where('guest_id', $guestId);
        }


        if ($prevCart = $prevCart->first()) {

            $prevCart->update([
                'qty' => $this->selectedQuantity
            ]);

            session()->flash('cart-added-message', "Added to cart");
            $this->emit('cartAdded');
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'guest_id' => $guestId,
                'product_id' => $this->product->id,
                'qty' => $this->selectedQuantity
            ]);

            session()->flash('cart-added-message', "Added to cart successfully.");
            $this->emit('cartAdded');
        }
    }




    public function checkout()
    {
        $minCheckout = 500.0;

        if ($minCheckout <=  auth()->user()->carts->sum(fn ($cart) => $cart->product->price * $cart->qty)) {
            return redirect()->route('checkout');
        } else {
            $this->orderMinimumNoticeProductShow = true;
            session()->flash('order-minimum', "Minimum order amount is Br " . number_format($minCheckout, 2));
        }
    }
}
