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
    $header_links = config('comics.header_links');
    $footer_links = config('comics.footer_links');
    $shop_links = config('comics.shop_links');
    $dc_links = config('comics.dc_links');
    $sites_links = config('comics.sites_links');

    return view('home', 
    compact(
        'title', 
        'comics', 
        'header_links',
        "footer_links",
        "shop_links",
        "dc_links",
        "sites_links",
    ));
})->name('home');

Route::get('/contacts', function () {

    return view('contacts');
})->name('contacts');

Route::get('/comics', function () {

    return view('comics');
})->name('comics');

