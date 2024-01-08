<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::name('customers.')->group(function(){
    Route::get('/',function(){
        return view('customers.pages.index');
    })->name('index');

    Route::get('/products', function () {
        return view('customers.pages.products.index');
    })->name('products.index');

    Route::get('products/{product}', function () {
        return view('customers.pages.products.show');
    })->name('products.show');

    Route::get('cart',function(){
        return view('customers.pages.cart');
    })->name('cart');

    Route::get('services/maintenance/create', function () {
        return view('customers.pages.maintenance.create');
    })->name('services.maintenance.create');

    Route::get('services/diagnoses/create', function () {
        return view('customers.pages.diagnoses.create');
    })->name('services.diagnoses.create');

    Route::get('services/consultations/create', function () {
        return view('customers.pages.consultations.create');
    })->name('services.consultations.create');

    Route::middleware(['auth', 'verified'])->prefix('customers')->group(function () {

        Route::get('/orders',function(){
            return view('customers.pages.orders.index');
        })->name('orders.index');

        Route::get('/orders/{order}',function(){
            return view('customers.pages.orders.show');
        })->name('orders.show');

        Route::get('/locations',function(){
            return view('customers.pages.locations.index');
        })->name('locations.index');

        Route::get('/profile', function(){
            return view('customers.pages.profile', [
                'user' => Auth::user()
            ]);
        })->name('profile');
    });
});
