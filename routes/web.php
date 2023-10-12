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

    $title = "Homepage";

    config('comics.php');

    return view('home', compact('title'));
})->name('home');

Route::get('/contacts', function () {

    $title = "Contacts";

    return view('contacts', compact('title'));
})->name('contacts');

Route::get('/comics', function () {

    $title = "Comics";

    return view('comics', compact('title'));
})->name('comics');

