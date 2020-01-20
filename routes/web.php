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

// FRONT
Route::get('/', function () {
    return view('Front/index');
});

/********************Home ********************/
Route::get('/home', 'Front\HomeController@index')->name('home');

/********************About Us ********************/
Route::get('/about', 'Front\AboutController@index')->name('about');

/********************PROFESSIONALS ********************/
Route::get('/professional', 'Front\ProfessionalController@index')->name('professional');

/********************SUPPORT ********************/
Route::get('/support', 'Front\SupportController@index')->name('support');

/********************BLOG ********************/
Route::get('/blog', 'Front\BlogController@index')->name('blog');

/********************PROFESSIONALS ********************/
Route::get('/becomeprofessional', 'Front\BecomeProfessionalController@index')->name('becomeprofessional');
