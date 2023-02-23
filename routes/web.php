<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    echo 'Selamat Datang';
});

Route::get('/about', function () {
    echo 'Braman Tyamahendrawan <br>';
    echo '2141720097';
});

Route::get('/artikel/{belajar}', function ($belajar) {
    return "Halaman Artikel dengan id " . $belajar;
});

Route::get('/articles/{id}', 'App\Http\Controllers\ArtikelController@show');


