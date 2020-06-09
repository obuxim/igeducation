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

// Visitor End Routes (Not Logged In)
Route::get('/', 'PagesController@index')->name('homepage');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@services')->name('services');
Route::get('/countries', 'PagesController@countries')->name('countries');
Route::get('/institutes', 'PagesController@institutes')->name('institutes');
Route::get('/testimonials', 'PagesController@testimonials')->name('testimonials');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/apply', 'PagesController@apply')->name('apply');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
