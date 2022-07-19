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

Route::get('/', 'PagesController@home')->name('home');

//Route::get('/cards', 'PagesController@cards')->name('cards');

Route::get('/comics', 'PagesController@index', function () {
    // $arrComics = config('comics');
    // return view('cards', [
    //     'arrComics' => $arrComics,
    // ]);
})->name('comics.index');
Route::post('/comics', 'PagesController@store')->name('comics.store');


Route::resource('/comics', 'ComicsController');
