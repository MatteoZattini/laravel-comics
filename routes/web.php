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

    $data = config("store");

    return view('home', $data);
})->name('home');

Route::get('/home', function () {

    $data = config("store");

    return view('home', $data);
})->name('home');

Route::get('/about/{indice}', function ($indice) {

    $data = config("store.fumetti");
    $singolofumetto = $data[$indice];
    $fumettodata = [
        "fumetto" => $singolofumetto
    ];
    if( array_key_exists($indice, $data)) {
        return view('about', $fumettodata);
    } else {
        abort(404, 'not found');
    }
})->name('about');