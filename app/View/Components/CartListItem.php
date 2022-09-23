<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CartListItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $cart, public $showSubTotal = false)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cart-list-item');
    }
}
