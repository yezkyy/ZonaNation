<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/topup', function () {
    return view('topup.index');
});

Route::post('/topup/process', function () {
    // Tambahkan logika proses top-up di sini
    return redirect('/topup/success');
});

Route::get('/topup/success', function () {
    return view('topup.success');
});