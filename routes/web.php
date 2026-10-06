<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello Laravel dari Monica 707082400036';
});

Route::get('/profil', function () {
    return view('pages.profil', [
        'nama'  => 'Monica',
        'nim'   => '707082400036',
        'kelas' => 'TRM-03',
    ]);
});

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/home', function () {
    return view('pages.home', [
        'nim' => '707082400036'
    ]);
});