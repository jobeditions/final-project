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


    
Route::resource('articles','PostController');
Route::resource('categorie','CategoriesController');
Route::resource('utilisateurs','UserController');
Route::resource('profile','ProfileController');
Route::resource('tags','TagController');
//Route::resource('settings','SettingsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/trash', 'PostController@trash');
Route::delete('/trash/{id}', 'PostController@kill');
Route::delete('/restore/{id}', 'PostController@restoretrash');
Route::get('/util/{id}', 'UserController@util');
Route::get('/no-util/{id}', 'UserController@noutil');

Route::get('/pagenotfound',[
	'uses'=>'HomeController@pagenotfound',
	'as'=>'errors']);

Route::get('/settings',[
	'uses'=>'SettingsController@index',
	'as'=>'settings']);

Route::post('/settings/updating',[
    'uses'=>'SettingsController@updating',
    'as'=>'settings.updating',
	]);

Route::get('/posts/{slug}',[
	'uses'=>'PageController@slugpost',
	'as'=>'single.posting']);

Route::get('/cat/{slug}',[
	'uses'=>'PageController@categorie',
	'as'=>'categorie.single']);

Route::get('/', 'PageController@frontpage');
Route::get('/contact', 'PageController@contact');
Route::get('/about', 'PageController@about');
Route::get('/blog', 'PageController@blog');





