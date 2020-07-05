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

//Delete User
Route::get('/users/{id}/destroy/','UserController@destroy')->name('users.destroy');


/****TODO Routes for Kochbuecher **************************************************************************/
// Show all Kochbuecher
Route::get('/kochbuecher','KochbuchController@index')->name('kochbuecher.index');

// Add Kochbuch
Route::get('/kochbuecher/create','KochbuchController@create')->name('kochbuecher.create_step1_Kochbuch');
Route::post('/kochbuecher/create_step2a','KochbuchController@create_step2a')->name('kochbuecher.create_step2a_addRezepte');
Route::post('/kochbuecher/create_step2b_1','KochbuchController@create_step2b_1')->name('kochbuecher.create_step2b_1_addZutaten');
Route::post('/kochbuecher/create_step2b_2','KochbuchController@create_step2b_2')->name('kochbuecher.create_step2b_2_createRezept');
Route::post('/kochbuecher/create_step3','KochbuchController@create_step3')->name('kochbuecher.create_step3_overview');
Route::get('/kochbuecher/store','KochbuchController@store')->name('kochbuecher.store');

//Show Kochbuch
Route::get('/kochbuecher/{kID}','KochbuchController@show')->name('kochbuecher.show');

//Update Kochbuch
Route::get('kochbuecher/{kID}/edit','KochbuchController@edit')->name('kochbuecher.edit');
Route::get('/kochbuecher/{kID}/edit_step2','KochbuchController@edit_step2')->name('kochbuecher.edit_step2');
Route::get('/kochbuecher/{kID}/rezept/{rID}/delete','KochbuchController@edit_step3')->name('kochbuecher.edit_step3');
Route::post('/kochbuecher/{kID}/update','KochbuchController@update')->name('kochbuecher.update');

//Delete Kochbuch
Route::get('/kochbuecher/{kID}/destroy/','KochbuchController@destroy')->name('kochbuecher.destroy');

/****TODO Routes for Rezepte **************************************************************************/
// Show all Rezepte
Route::get('/rezepte','RezeptController@index')->name('rezepte.index');
Route::get('/rezepte_ajax','RezeptController@filterAjax');


// Add Rezept
Route::get('/rezepte/create','RezeptController@create')->name('rezepte.create_step1_addZutaten');
Route::post('/rezepte/create_step2','RezeptController@create_step2')->name('rezepte.create_step2_Rezept');
Route::post('/rezepte/create_step3','RezeptController@create_step3')->name('rezepte.create_step3_overview');
Route::get('/rezepte/store','RezeptController@store')->name('rezepte.store');

//Show Rezept
Route::get('/rezepte/{rID}','RezeptController@show')->name('rezepte.show');

//Update Rezept
Route::get('rezepte/{rID}/edit_step1','RezeptController@edit')->name('rezepte.edit_step1_Zutaten');
Route::post('/rezepte/{rID}/edit_step2','RezeptController@edit_step2')->name('rezepte.edit_step2_Rezept');
Route::get('/rezepte/{rID}/update','RezeptController@update')->name('rezepte.update');

//Delete Rezept
Route::get('/rezepte/{rID}/destroy/','RezeptController@destroy')->name('rezepte.destroy');

/****Routes for Zutaten **************************************************************************/
// Show all Zutaten
Route::get('/zutaten','ZutatController@index')->name('zutaten.index');

// Add Zutat
Route::get('/zutaten/create','ZutatController@create')->name('zutaten.create');
Route::post('/zutaten','ZutatController@store')->name('zutaten.store');

//Show Zutat
Route::get('/zutaten/{zName}','ZutatController@show')->name('zutaten.show');

//API for AJAX
Route::get('/api/v1/zutaten/{rID}', 'ZutatController@indexJson')->name('zutaten.indexJson');

//Update Zutat
Route::get('zutaten/{zName}/edit','ZutatController@edit')->name('zutaten.edit');
Route::post('/zutaten/{zName}/update','ZutatController@update')->name('zutaten.update');

//Delete Zutat
Route::get('/zutaten/{zName}/destroy/','ZutatController@destroy')->name('zutaten.destroy');

/****TODO Routes for Wochenkochplan **************************************************************************/
//Update Wochenkochplan
Route::get('/wochenkochplan','WochenkochplanController@edit')->name('wochenkochplan.edit');


/****TODO Routes for Einkaufsliste **************************************************************************/


/****Remaining Routes **************************************************************************/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/impressum', function () {
    return view('impressum');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

