<?php

namespace App\Http\Livewire;

use App\Models\Address;
use Livewire\Component;

class CustomerAddress extends Component
{

    public $modalOpen = false;
    public Address $address;

    public function rules()
    {
        return [
            'address.name' => ['required', 'string', 'max:255'],
            'address.city' => ['required'],
            'address.state' => ['required'],
            'address.phone_number' => ['required', 'string',   'max:10'],
            'address.address' => ['required', 'string', 'max:255'],
            'address.address_description' => ['sometimes', 'nullable', 'max:255'],
        ];
    }

    public function render()
    {
        return view('livewire.customer-address', [
            'addresses' => Address::where('user_id', auth()->id())->get(),
        ]);
    }


    public function deleteAddress($address)
    {
        if ($address['user_id'] == auth()->id()) {
            Address::where('id', $address['id'])->delete();

            $this->dispatchBrowserEvent('notice-toast', [
                'type' => 'success',
                'message' => 'Address deleted'
            ]);
        }
    }


    public function openModal($id = null)
    {
        if (is_null($id)) {
            $this->address = new Address();
        } else {
            $this->address = Address::find($id);
        }

        $this->modalOpen = true;
    }

    public function save()
    {
        $this->validate();
        $this->address->save();

        $this->dispatchBrowserEvent('notice-toast', [
            'type' => 'success',
            'message' => 'Address saved'
        ]);

        $this->modalOpen = false;
    }
}
