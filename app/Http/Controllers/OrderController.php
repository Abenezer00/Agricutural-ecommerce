<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{


    public function success(Order $order)
    {
        $order->load(['address']);

        if ($order->user_id == auth()->id()) {
            return view('shop.order.order-success', [
                'order' => $order
            ]);
        } else {
            abort(404);
        }
    }

    public function payment(Order $order)
    {
        if ($order->status != 'Paid' && $order->user_id == auth()->id()) {
            return view('shop.order.payment', [
                'order' => $order
            ]);
        } else {
            return redirect()->route('shop.index');
        }
    }
}
