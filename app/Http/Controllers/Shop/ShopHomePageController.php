<?php

namespace App\Http\Controllers\Shop;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;


class ShopHomePageController extends Controller
{


    public function index()
    {
        $products =   Product::with('featuredImage')->where('is_visible', true)->latest()->get();

        $menuCategories =  Category::where('is_visible', true)
            ->get();

        return view(
            'shop.home.index',
            compact('menuCategories')
        );
    }
}
