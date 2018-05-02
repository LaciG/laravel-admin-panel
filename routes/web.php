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

//Blog linkek
    Route::get('/blog', 'BlogController@index');

    Route::get('/blog/{id}', 'BlogController@show');

//Karrier Linkek
    Route::get('/carrier', 'CarrierController@index');

    Route::get('/carrier/{id}', 'CarrierController@show');

    Route::post('/carrier{id}', 'CarrierController@store');

Auth::routes();
//Főoldal
    Route::get('/home', 'HomeController@index')->name('home');
//Felhasználók kezelése
    Route::get('/users', 'UsersController@index');
//Állás kezelés
    Route::get('/openjobs', 'OpenJobsController@index');

    Route::get('/addjob', 'OpenJobsController@create');

    Route::get('/jobapplication', 'JobApplicationController@index');
//Blog kezelés
    Route::get('/blogarticles', 'BlogArticlesController@index');

    Route::get('/addarticle', 'BlogArticlesController@create');

    Route::post('/storearticle', 'BlogArticlesController@store');

    Route::get('/article/{id}', 'BlogArticlesController@view');

    Route::post('/article/{id}', 'BlogArticlesController@edit');

    Route::get('/deletearticle/{id}', 'BlogArticlesController@destroy');
//Kategória kezelés
    Route::get('/category', 'CategoryController@create');

    Route::post('/addCategory', 'CategoryController@store');
//GDPR Kezelés
    Route::get('/gdprsettings', 'GdprSettingsController@index');

    Route::get('/gdprstatistics', 'GdprStatisticsController@index');
