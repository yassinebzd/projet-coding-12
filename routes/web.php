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

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
Route::get('/', 'WelcomeController@index')->name('Welcome');

// Routes team
Route::get('/viewteam', 'TeamController@show')->name('teams');
Route::get('/teamedit/create', 'TeamController@create');
Route::post('/teamedit/{id}/update', 'TeamController@update');
Route::resource('team', 'TeamController');


// Routes Services
Route::get('/serviceedit', 'ServiceController@show')->name('services');
Route::post('/serviceedit/{id}/update', 'ServiceController@update');
Route::get('/serviceedit/create', 'ServiceController@create');
Route::resource('service', 'ServiceController');

// Routes portfolio
Route::get('/viewportfolio', 'PortfolioController@show')->name('portfolios');
Route::get('/portfolioedit/create', 'PortfolioController@create');
Route::post('/portfolioedit/{id}/update', 'PortfolioController@update');
Route::resource('portfolio', 'PortfolioController');

// Routes about
Route::get('/viewabout', 'AboutController@show')->name('abouts');
Route::get('/aboutedit/create', 'AboutController@create');
Route::post('/aboutedit/{id}/update', 'AboutController@update');
Route::resource('about', 'AboutController');

