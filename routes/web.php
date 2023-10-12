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

    $title = "Laravel Comics";

    $comics = config('comics.comics');

    return view('home', compact('title', 'comics'));
})->name('home');

Route::get('/contacts', function () {

    return view('contacts');
})->name('contacts');

Route::get('/comics', function () {

    return view('comics');
})->name('comics');

