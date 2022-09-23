<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsCartEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $carts = auth()->user()->carts;
        $minCheckout = 500.0;

        if ($carts->count() > 0 && $minCheckout <= $carts->sum(fn ($cart) => $cart->product->price * $cart->qty)) {
            return $next($request);
        } else {
            return redirect()->route('shop.index');
        }
    }
}
