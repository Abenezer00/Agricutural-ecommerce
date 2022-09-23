<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;


class Payment extends Component
{
    public $transactionNumber;
    public $order;

    public function render()
    {
        return view('livewire.payment');
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
                    'status' => 'processing',
                ]);

                Transaction::create([
                    'order_id' => $this->order->id,
                    'status' => 'Pending',
                    'reference_number' => $data['transactionNumber']
                ]);
                // TODO: send payment received message

                return redirect()->route('order-success', $this->order->uuid);
            }
        );
    }
}
