<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalog\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function showByMetaSlug($productMetaSlug)
    {
        $product =  Product::with(['media'])->where('slug', $productMetaSlug)->firstOrFail();

        return view('shop.product.show', compact('product'));
    }


    public function searchProductShow(Category $category)
    {
        $products = $category->products;
        return view('shop.product.by-category', compact('products'));
    }
}
