<?php

use App\Http\Controllers\CatingLink;
use App\Http\Controllers\Example;
use App\Http\Controllers\Scraper;
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
    return view('welcome');
});

Route::view('/link_cat' , 'cating_link' )->name('link_cat');
Route::post('/link_cat' , [CatingLink::class , 'cating_link_post'] )->name('link_cat_post');
Route::post('/show_link' , [CatingLink::class , 'search_link'] )->name('search_link');
Route::get('/{link}' , [CatingLink::class , 'send_link'] )->name('send_link');
Route::get('/scraper/view' , function(){return view('scraper');} )->name('scraper_view');
Route::post('/scraper' , [Scraper::class , 'scraper_post'] )->name('scraper_post');
Route::get('/example/set' , [Example::class , 'example'] )->name('example');