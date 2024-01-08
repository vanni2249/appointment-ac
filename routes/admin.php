<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.index');
    })->name('index');
    Route::get('/orders', function () {
        return view('admin.pages.orders.index');
    })->name('orders.index');
    Route::get('/orders/{order}', function () {
        return view('admin.pages.orders.show');
    })->name('orders.show');
    Route::get('/users', function () {
        return view('admin.pages.users.index');
    })->name('users.index');
    Route::get('/users/{user}', function () {
        return view('admin.pages.users.show');
    })->name('users.show');

    Route::get('/transactions', function () {
        return view('admin.pages.transactions.index');
    })->name('transactions.index');
    Route::get('/transactions/{transaction}', function () {
        return view('admin.pages.transactions.show');
    })->name('transactions.show');

    Route::get('/works', function () {
        return view('admin.pages.works.index');
    })->name('works.index');
    Route::get('/works/{work}', function () {
        return view('admin.pages.works.show');
    })->name('works.show');

    Route::get('/profile', function(){
        return view('admin.pages.profile.index',[
            'user' => Auth::user()
        ]);
    })->name('profile');
    Route::get('/products', function(){
        return view('admin.pages.products.index');
    })->name('products.index');
    Route::get('/services', function(){
        return view('admin.pages.services.index');
    })->name('services.index');
    Route::get('/cities', function(){
        return view('admin.pages.cities.index');
    })->name('cities.index');
    Route::get('/cities/{city}', function(){
        return view('admin.pages.cities.show');
    })->name('cities.show');
    Route::get('/locations', function(){
        return view('admin.pages.locations.index');
    })->name('locations.index');
    Route::get('/locations/{location}', function(){
        return view('admin.pages.locations.show');
    })->name('locations.show');

    Route::get('/categories', function(){
        return view('admin.pages.categories.index');
    })->name('categories.index');

    Route::get('/roles', function(){
        return view('admin.pages.roles.index');
    })->name('roles.index');
});