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

/****TODO Routes for Users **************************************************************************/

Route::get('/users',function(){
    return view('users');
});

/****TODO Routes for Kochbuecher **************************************************************************/
// Show all Kochbuecher
Route::get('/kochbuecher',function(){
    return view('kochbuecher');
});


/****TODO Routes for Rezepte **************************************************************************/

Route::get('/rezepte',function(){
    return view('rezepte');
});

/****TODO Routes for Zutaten **************************************************************************/
// Show all Zutaten
Route::get('/zutaten',function(){
    return view('zutaten');
});
//Route::get('/zutaten','ZutatenController@index')->name('zutaten.index');


/****Remaining Routes **************************************************************************/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
