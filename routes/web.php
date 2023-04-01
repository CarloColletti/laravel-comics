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

    $comics = config('db_comics.comics');
    
    return view('homepage', compact('comics'));
})->name('homepage');


Route::get('/detail/{index}', function ($index) {
    $comics = config('db_comics.comics');
    
    $comic = $comics[$index];
    return view('detail', compact('comic'));
})->name('detail-product');
