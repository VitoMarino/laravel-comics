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
    $elements = [
        '0' => 'Characters',
        '1' => 'Movies',
        '2' => 'Comics',
        '3' => 'Tv',
        '4' => 'Games',
        '5' => 'Collectibles',
        '6' => 'Videos',
        '7' => 'Fans',
        '8' => 'News',
        '9' => 'Shop',
    ];

    return view('pages.home', compact('elements'));
});

Route::get('/', function () {
    return view('pages.products');
});
