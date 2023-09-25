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
    return view('home', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("homepage");


Route::get('/Characters', function () {
    return view('characters', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("characters");

Route::get('/Comics', function () {
    return view('Comics', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("comics");

Route::get('/Movies', function () {
    return view('movies', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("movies");

Route::get('/Tv', function () {
    return view('tv', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("tv");

Route::get('/Games', function () {
    return view('games', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("games");

Route::get('/Collectibles', function () {
    return view('collectibles', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("collectibles");

Route::get('/Video', function () {
    return view('video', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("video");

Route::get('/Fans', function () {
    return view('fans', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("fans");

Route::get('/News', function () {
    return view('news', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("news");


Route::get('/Shop', function () {
    return view('shop', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("shop");


Route::get('/Collectibles', function () {
    return view('collectibles', ["navlinks" => config("navlinks")], ["comics" => config("comics")]); //["footerlinks" => config("footerlinks")]);
})->name("collectibles");