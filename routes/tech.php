<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('tech')->name('tech.')->group(function () {
    Route::get('/', function(){
        return view('tech.pages.index');
    });
    // Route::get('/orders', function () {
    //     return view('tech.pages.orders.index');
    // })->name('orders.index');
    // Route::get('/orders/{order}', function () {
    //     return view('tech.pages.orders.show');
    // })->name('orders.show');
    Route::get('/works', function () {
        return view('tech.pages.works.index');
    })->name('works.index');
    Route::get('/works/{work}', function () {
        return view('tech.pages.works.show');
    })->name('works.show');
    Route::get('/invoices', function () {
        return view('tech.pages.invoices.index');
    })->name('invoices.index');
    Route::get('/invoices/{invoice}', function () {
        return view('tech.pages.invoices.show');
    })->name('invoices.show');
    Route::get('/profile', function () {
        return view('tech.pages.profile.index',[
            'user' => Auth::user()
        ]);
    })->name('profile');
});