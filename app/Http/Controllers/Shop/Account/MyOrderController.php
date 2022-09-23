<?php

namespace App\Http\Controllers\Shop\Account;

use App\Models\Order;
use App\Http\Controllers\Controller;

class MyOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = Order::where('user_id', auth()->id())->orderBy('id', 'desc')->paginate(5);

        return view('shop.account.my_order.index', compact('orders'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        if ($order->user_id != auth()->id()) {
            abort(404);
        }

        $order->load('orderItems');


        return view('shop.account.my_order.show', compact('order'));
    }

    public function cancelOrder(Order $order)
    {
        if ($order->user_id != auth()->id()) {
            abort(404);
        }

        if ($order->status == 'Awaiting Payment') {
            $order->update([
                'status' => 'Canceled'
            ]);

            // TODO: order cancel
        }

        return back();
    }
}
