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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/users')->middleware(['permission:read users'])->group(function () {
    Route::get('index', 'UsersController@index')->name('users.index');
    Route::middleware(['permission:write users'])->group(function () {
        Route::get('{user}', 'UsersController@update')->name('users.update');
    });
});

Route::prefix('/scores')->middleware(['permission:read scores'])->group(function () {
    Route::get('index', 'ScoresController@index')->name('scores.index');
    Route::middleware(['permission:write scores'])->group(function () {
        Route::get('{user}', 'ScoresController@update')->name('scores.update');
    });
});
