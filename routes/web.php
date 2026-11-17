<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Monica Pratiwi',
        'kelas'=> 'TRM-03',
        'nim' => '707082400036',
    ]);
});

Route::get('/latihan', function () {
    $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];
    return view('pages.latihan', ['matakuliah' => $matakuliah]);
});

Route::get('/sapa', [SapaController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

Route::post('/product', [ProductController::class, 'store']);
