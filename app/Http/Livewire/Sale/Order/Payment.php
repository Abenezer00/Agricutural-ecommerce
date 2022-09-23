<?php

namespace App\Http\Livewire\Sale\Order;

use App\Events\Sale\OrderPaidEvent;
use Livewire\Component;
use App\Models\Sale\Order;
use App\Models\Sale\Transaction;
use Illuminate\Support\Facades\DB;

class Payment extends Component
{
    public $transactionNumber;
    public $order;

    public function render()
    {
        return view('livewire.sale.order.payment');
    }

    public function rules()
    {
        return [
            'transactionNumber' => ['required', 'string', 'max:255']
        ];
    }


    public function store()
    {
        $data = $this->validate();

        DB::transaction(
            function () use ($data) {

                $this->order->update([
                    'status' => 'Payment Received',
                ]);

                $transaction =  Transaction::create([
                    'order_id' => $this->order->id,
                    'user_id' => $this->order->user_id,
                    'payment_method_id' => $this->order->payment_method_id,
                    'transaction_number' => $data['transactionNumber'],
                    'amount' => $this->order->total_due,

                ]);
                // TODO: send payment received message
                event(new OrderPaidEvent(auth()->user(), $this->order));

                return redirect()->route('order-success', $this->order->uuid);
            }
        );
    }
}
