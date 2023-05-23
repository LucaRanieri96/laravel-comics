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
    $comics = config('comics');

    return view('home', compact('comics'));
});


Route::get('/comic/Action%20Comics%20#1000:%20The%20Deluxe%20Edition', function () {

    return view('comic1');
});