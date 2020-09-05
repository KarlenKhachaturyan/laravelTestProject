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
    return view('welcome');
});


Route::get('/task', 'HomePageController@show')->name('home');
Route::get('/task/{lang}', 'HomePageController@changeLang');

Route::get('/services', 'ServicesPageController@show')->name('services');
Route::get('/services/{lang}', 'ServicesPageController@changeLang');

Route::get('/partners', 'PartnersPageController@show')->name('partners');
Route::get('/partners/{lang}', 'PartnersPageController@changeLang');

Route::get('/staff', 'AboutPageController@show')->name('staff');
Route::get('/staff/{lang}', 'AboutPageController@changeLang');


Route::get('/movies', 'MoviesController@index')->name('movies');

Route::get('/movies/create', 'MoviesController@create')->name('createRecord');

Route::post('/movies', 'MoviesController@store')->name('addNew');

Route::get('/movies/{id}', 'MoviesController@show')->name('showRecord');

Route::get('/movies/{id}/edit', 'MoviesController@edit')->name('editRecord');

Route::put('/movies/{id}', 'MoviesController@update')->name('updateRecord');

Route::get('/movies/delete/{id}', 'MoviesController@destroy')->name('deleteRecord');

