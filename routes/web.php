<?php

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

Route::get('/','StaticController@home')->name('home');
Route::get('/contactus','StaticController@contactus')->name('contactus');
Route::get('/about/goals','StaticController@goals')->name('about_goals');
Route::get('/about/chart','StaticController@chart')->name('about_chart');
Route::get('/about/staff','StaticController@staff')->name('about_staff');
Route::get('/about/dep','StaticController@dep')->name('about_dep');
Route::get('/about/assets','StaticController@assets')->name('about_assets');

Route::get('/register','RegisterController@form')->name('register_form');
Route::post('/register','RegisterController@register')->name('register');
