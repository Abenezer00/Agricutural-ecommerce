<?php

namespace App\Observers;

use App\Models\Inventory;
use App\Models\Product;

class ProductObserver
{

    public function created(Product $product)
    {
        Inventory::create([
            'event' =>  'Initial',
            'initial_qty' => $initialQty = 0,
            'initial_price' => $initialPrice = 0.0,
            'current_qty' => $product->qty,
            'current_price' => $product->price,
            'qty_difference' => $product->qty -  $initialQty,
            'price_difference' => $product->price - $initialPrice
        ]);
    }

    public function updated(Product $product)
    {
        $changes = array_diff($product->getOriginal(), $product->getAttributes());
        if (array_key_exists('qty', $changes) || array_key_exists('price', $changes)) {
            $product->inventories()->create([
                'event' => auth()->user()->hasRole('Customer') ? 'Ordered' : 'Updated',
                'initial_qty' => $changes['qty'],
                'initial_price' => $initialPrice = $changes['price'] ??  $product->price,
                'current_qty' => $product->qty,
                'current_price' => $product->price,
                'qty_difference' => $product->qty -  $changes['qty'],
                'price_difference' => $product->price - $initialPrice
            ]);
            error_log('created');
        }
    }
}
