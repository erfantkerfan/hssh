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
//Auth:
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout')->name('logout');

//Public:
Route::get('/','Controller@home')->name('home');
Route::get('/home','StaticController@home')->name('home');
Route::get('/contactus','StaticController@contactus')->name('contactus');
Route::get('/news10','NewsController@index10')->name('news10');
Route::get('/news11','NewsController@index11')->name('news11');
Route::get('/news/{id}','NewsController@single')->name('news_single');
Route::prefix('about')->group(function () {
    Route::get('goals','StaticController@goals')->name('about_goals');
    Route::get('chart','StaticController@chart')->name('about_chart');
    Route::get('staff','StaticController@staff')->name('about_staff');
    Route::get('dep','StaticController@dep')->name('about_dep');
    Route::get('assets','StaticController@assets')->name('about_assets');
});

//Preregister:
Route::get('/register','RegisterController@form')->name('register_form');
Route::post('/register','RegisterController@register')->name('register');

//admin:
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/preregister', 'RegisterController@preregister')->name('preregister');
        Route::get('/news/form', 'NewsController@form')->name('news_form');
        Route::Post('/news', 'NewsController@create')->name('news_create');
        Route::get('/news/delete/{id}', 'NewsController@delete')->name('news_delete');
    });
});




