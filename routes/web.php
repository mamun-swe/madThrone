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


Auth::routes();

// Admin
Route::get('/home', 'HomeController@index')->name('home');


// User
Route::get('/', 'Website\WebsiteController@index')->name('welcome');
Route::get('/services', 'Website\WebsiteController@service')->name('service');
Route::get('/about-us', 'Website\WebsiteController@about')->name('about-us');
Route::get('/tools-tech', 'Website\WebsiteController@toolsTech')->name('tools-tech');
Route::get('/contact-us', 'Website\WebsiteController@contactUs')->name('contact-us');
