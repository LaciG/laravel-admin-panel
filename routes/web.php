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

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index');

Route::get('/openjobs', 'OpenJobsController@index');

Route::get('/jobapplication', 'JobApplicationController@index');

Route::get('/blogarticles', 'BlogArticlesController@index');

Route::get('/gdprsettings', 'GdprSettingsController@index');

Route::get('/gdprstatistics', 'GdprStatisticsController@index');
