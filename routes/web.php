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
// Auth:
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Public:
Route::get('/', 'Controller@landing');
Route::get('/home', 'StaticController@home')->name('home');
Route::get('/contactus', 'StaticController@contactus')->name('contactus');
Route::prefix('about')->group(function () {
    Route::get('goals', 'StaticController@goals')->name('about_goals');
    Route::get('chart', 'StaticController@chart')->name('about_chart');
    Route::get('staff', 'StaticController@staff')->name('about_staff');
    Route::get('teachers', 'TeacherController@teachers')->name('teachers');
    Route::get('teacher/{teacher}', 'TeacherController@teacher')->name('teacher');
    Route::get('assets', 'StaticController@assets')->name('about_assets');
});
Route::get('/news/{type}', 'NewsController@category')->name('news_category');
Route::get('/news/{type}/{id}', 'NewsController@single')->name('news_single');
Route::post('/message', 'MessageController@create')->name('message_create');
Route::get('/educational/{type}', 'EducationalController@category')->name('educational_category');
Route::get('/educational/{type}/{id}', 'EducationalController@single')->name('educational_single');
// Admin:
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/panel', 'Controller@panel')->name('panel');
        Route::get('password', 'Auth\PasswordController@showPasswordForm')->name('password');
        Route::post('password', 'Auth\PasswordController@Password');
        Route::get('/preregister/delete/{id}', 'RegisterController@delete')->name('register_delete');
        Route::get('/news/form', 'NewsController@form')->name('news_form');
        Route::Post('/news', 'NewsController@create')->name('news_create');
        Route::get('/news/delete/{id}', 'NewsController@delete')->name('news_delete');
        Route::get('/message/delete/{id}', 'MessageController@delete')->name('message_delete');
        Route::get('/educational/form', 'EducationalController@form')->name('educational_form');
        Route::Post('/educational', 'EducationalController@create')->name('educational_create');
        Route::get('/educational/delete/{id}', 'EducationalController@delete')->name('educational_delete');
        Route::get('/slider', 'SliderController@show_form')->name('slider');
        Route::Post('/slider', 'SliderController@create');
        Route::delete('/slider', 'SliderController@delete');
    });
});
// Preregister:
Route::get('/register', 'RegisterController@form')->name('register_form');
Route::post('/register', 'RegisterController@register')->name('register');
Route::get('pdf/preregister/{id}', 'RegisterController@pdf')->name('pdf');
// Video:
Route::get('/videos', 'VideoController@index')->name('video');
// Test:
Route::get('/minimilitia', 'Controller@minimilitia')->name('minimilitia');
Route::post('/minimilitia', 'Controller@minimilitia_post');