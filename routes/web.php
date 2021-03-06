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

Route::get('/', 'SiteController@index');
Route::get('/portfolio', 'SiteController@portfolio');
Route::post('/contact', 'SiteController@store');

Route::get('/index', function () {
    return view('index');
});

Route::get('/projects', function () {
    return view('projects');
});
