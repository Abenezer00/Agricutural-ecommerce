<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchSidebar extends Component
{

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        if (trim($this->search)) {
            $products = Product::search($this->search)
                ->where('is_visible', true)
                ->take(20)
                ->orderBy('id', 'desc')
                ->get()
                ->load('featuredImage');
        } else {
            $products = collect();
        }

        return view('livewire.search-sidebar', [
            'products' => $products,
        ]);
    }
}
