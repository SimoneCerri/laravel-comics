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
    return view('home');
})->name("home_page");

Route::get('/characters', function () {
    return view('characters');
})->name("characters_page");

Route::get('/comics', function () {
    $comics = config('comics.comics');
    return view('comics',compact("comics"));
})->name("comics_page");

Route::get('/movies', function () {
    return view('movies');
})->name("movies_page");

Route::get('/tv', function () {
    return view('tv');
})->name("tv_page");

Route::get('/games', function () {
    return view('games');
})->name("games_page");

Route::get('/collectibles', function () {
    return view('collectibles');
})->name("collectibles_page");

Route::get('/videos', function () {
    return view('videos');
})->name("videos_page");

Route::get('/fans', function () {
    return view('fans');
})->name("fans_page");

Route::get('/news', function () {
    return view('news');
})->name("news_page");

Route::get('/shop', function () {
    return view('shop');
})->name("shop_page");

Route::get('/comics/{id}',function($id)
{
    abort_unless($id >= 0 && $id < count(config('comics.comics')),404);
    $comic = config('comics.comics')[$id];
    //dd($comic);
    return view('comics.details',compact('comic'));
})->name('comics.details');
