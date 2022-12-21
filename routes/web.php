<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //scrivo il testo dinamico
    $saluto = "Hello";
    $soggetto = "world";
    //lo racchiudo in un array
    $data = [
        'saluto' =>$saluto,
        'soggetto' =>$soggetto
    ];
    //lo vado a stampare
    return view('home', $data);
});
