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


    
Route::resource('posts','PostController');
Route::resource('category','CategoriesController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/trash', 'PostController@trash');
Route::delete('/trash/{id}', 'PostController@kill');
Route::delete('/restore/{id}', 'PostController@restoretrash');


Route::get('/', function () {
    return view('welcome');
});


