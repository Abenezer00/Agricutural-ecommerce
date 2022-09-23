<?php

use App\Http\Middleware\IsCartEmpty;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Shop\ShopHomePageController;
use App\Http\Controllers\Shop\Account\MyOrderController;


Route::get('/', [ShopHomePageController::class, 'index'])->name('shop.index');

Route::get('products/search/{category}', [ProductController::class, 'searchProductShow'])->name('products.search-by-category');
Route::get('products/{slug}', [ProductController::class, 'showByMetaSlug'])->name('products.show');


Route::group([], function () {
    Route::view('checkout', 'shop.checkout.checkout-form')->name('checkout')->middleware(IsCartEmpty::class);
    Route::get('order-success/{order:uuid}', [OrderController::class, 'success'])->name('order-success');
    Route::get('order-payment/{order:uuid}', [OrderController::class, 'payment'])->name('order-payment');

    Route::group(['prefix' => 'account'], function () {


        Route::view('update-profile-info', 'profile.show')->name('profile-info');

        Route::get('orders', [MyOrderController::class, 'index'])->name('my-orders.index');

        Route::get('orders/{order:uuid}', [MyOrderController::class, 'show'])->name('my-orders.show');

        Route::get('order-cancel/{order:uuid}', [MyOrderController::class, 'cancelOrder'])->name('cancel-order');

        Route::get('browse-history/{product_id}', [TrackingController::class, 'destroy'])->name('browse-history.delete');

        Route::view('address', 'shop.account.address.index')->name('address');
    });
});


Route::view('company-order', 'shop.company-order.create')->name('company-order.create');
