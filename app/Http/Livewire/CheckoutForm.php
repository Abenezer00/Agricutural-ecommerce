<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Address;
use Livewire\Component;
use App\Models\OrderItem;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class CheckoutForm extends Component
{

    public $fullName, $phoneNumber, $note;
    public $address, $addressDescription, $city, $state;
    public $addressChoice = 'previous';
    public $previousSelectedAddress;
    public $carts;



    public function rules()
    {
        $rules = [
            'note' => ['sometimes', 'nullable', 'max:255'],
        ];

        if ($this->addressChoice != 'previous') {
            $rules += [
                'fullName' => ['required', 'string', 'max:255'],
                'phoneNumber' => ['required', 'string', 'max:10'],
                'city' => ['required', 'string'],
                'state' => ['required', 'string'],
                'address' => ['required', 'string', 'max:255'],
                'addressDescription' => ['sometimes', 'nullable', 'max:255'],
            ];
        } else {
            $rules += [
                'previousSelectedAddress' => ['required', 'integer', 'exists:addresses,id']
            ];
        }

        return $rules;
    }

    public function render()
    {
        $previousAddress = Address::where('user_id', auth()->id())->get();

        if ($previousAddress->first()) {
            $this->previousSelectedAddress = $previousAddress->first()->id;
        } else {
            $this->addressChoice = 'new';
        }

        return view('livewire.checkout-form', [
            'previousAddresses' => $previousAddress,
        ]);
    }




    public function store()
    {

        $data = $this->validate();
        $carts = auth()->user()->carts;


        if ($carts->count() <= 0) {
            $this->dispatchBrowserEvent('notice-toast', [
                'type' => 'danger',
                'message' => 'Your cart is empty, try again after you add some products'
            ]);
            return;
        }

        $minCheckout = 500.0;

        if ($minCheckout >  $carts->sum(fn ($cart) => $cart->product->price * $cart->qty)) {
            $this->dispatchBrowserEvent('notice-toast', [
                'type' => 'danger',
                'message' => "Minimum order amount is Br " . number_format($minCheckout, 2)
            ]);
            return;
        }

        DB::transaction(
            function () use ($data, $carts) {


                if ($this->addressChoice == 'previous') {
                    $addressId = $this->previousSelectedAddress;
                } else {
                    $address = Address::create([
                        'user_id' => auth()->id(),
                        'name' => $data['fullName'],
                        'phone_number' => $data['phoneNumber'],
                        'address' => $data['address'],
                        'address_description' => $data['addressDescription'],
                        'city' => $data['city'],
                        'state' => $data['state'],
                    ]);
                    $addressId = $address->id;
                }


                $order = Order::create([
                    'uuid' => Str::uuid()->toString(),
                    'user_id' => auth()->id(),
                    'address_id' => $addressId,
                    'notes' => $data['note'],
                    'total_price' => $carts->sum(fn ($cart) => $cart->product->price * $cart->qty)
                ]);

                foreach ($carts as $cart) {
                    OrderItem::create([
                        'order_id' => $order->id,
                        'product_id' => $cart->product_id,
                        'qty' => $cart->qty,
                        'unit_price' => $cart->product->price
                    ]);
                    $cart->delete();
                }

                // TODO: send email including payment info
                return redirect()->route('order-success', $order->uuid);
            }
        );
    }

    public function setFullName()
    {
        $this->fullName = auth()->user()->name;
        $this->resetValidation('fullName');
        $this->resetErrorBag('fullName');
    }
}
