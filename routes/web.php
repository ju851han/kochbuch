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
//Show all Users
Route::get('/users','UserController@index')->name('users');

/****TODO Routes for Kochbuecher **************************************************************************/
// Show all Kochbuecher
Route::get('/kochbuecher','KochbuchController@index')->name('kochbuecher.index');

// Add Kochbuch
Route::get('/kochbuecher/create','KochbuchController@create')->name('kochbuecher.create');
Route::post('/kochbuecher','KochbuchController@store')->name('kochbuecher.store');

//Update Kochbuch
Route::get('kochbuecher/{kID}/edit','KochbuchController@edit')->name('kochbuecher.edit');
Route::post('/kochbuecher/{kID}/update','KochbuchController@update')->name('kochbuecher.update');

/****TODO Routes for Rezepte **************************************************************************/
// Show all Rezepte
Route::get('/rezepte','RezeptController@index')->name('rezepte.index');

// Add Rezept
Route::get('/rezepte/create','RezeptController@create')->name('rezepte.create');
Route::post('/rezepte','RezeptController@store')->name('rezepte.store');

//Update Rezept
Route::get('rezepte/{rID}/edit','RezeptController@edit')->name('rezepte.edit');
Route::post('/rezepte/{rID}/update','RezeptController@update')->name('rezepte.update');


/****TODO Routes for Zutaten **************************************************************************/
// Show all Zutaten
Route::get('/zutaten','ZutatenController@index')->name('zutaten.index');

// Add Zutat
Route::get('/zutaten/create','ZutatenController@create')->name('zutaten.create');
Route::post('/zutaten','ZutatenController@store')->name('zutaten.store');

//Show Zutat
Route::get('/zutaten/{zName}','ZutatenController@show')->name('zutaten.show');

//Update Zutat
Route::get('zutaten/{zName}/edit','ZutatenController@edit')->name('zutaten.edit');
Route::post('/zutaten/{zName}/update','ZutatenController@update')->name('zutaten.update');

/****Remaining Routes **************************************************************************/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
