<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::view('/pelanggan', 'pelanggan')->name('pelanggan');
Route::view('/transaksi', 'transaksi')->name('transaksi');