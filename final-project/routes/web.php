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


    
Route::resource('articles','PostController', ['except' => ['show']]);
Route::resource('categorie','CategoriesController', ['except' => ['create']]);
Route::resource('utilisateurs','UserController');
Route::resource('profile','ProfileController');
Route::resource('tags','TagController', ['except' => ['create','show']]);
Route::resource('commentaires','CommentsController');

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

Route::get('settings-page-daccueil',[
	'uses'=>'SettingsController@index',
	'as'=>'settings'])->middleware('author');

Route::get('settings-contact',[
	'uses'=>'SettingsController@index1',
	'as'=>'settings1'])->middleware('author');

Route::get('settings-a-propos',[
	'uses'=>'SettingsController@index2',
	'as'=>'settings2'])->middleware('author');

Route::post('/settings/updating',[
    'uses'=>'SettingsController@updating',
    'as'=>'settings.updating',
	])->middleware('author');

Route::get('/posts/{slug}',[
	'uses'=>'PageController@slugpost',
	'as'=>'single.posting']);

Route::get('/commentaire/{slug}',[
	'uses'=>'PageController@sluggerpost',
	'as'=>'single.postslugger'])->middleware('auth');
;

Route::get('/cat/{slugs}',[
	'uses'=>'PageController@categorie',
	'as'=>'categorie.single']);

Route::get('/etiquettes/{slugger}',[
	'uses'=>'PageController@tagname',
	'as'=>'etiquettes.single']);


Route::get('/contact',[
	'uses'=>'MailController@contact',
	'as'=>'contactmail.single']);

Route::post('/send',[
	'uses'=>'MailController@send',
	'as'=>'sendmail.single']);

Route::get('/', 'PageController@frontpage');
//Route::get('/contact', 'PageController@contact');
Route::get('/about', 'PageController@about');
Route::get('/blog', 'PageController@blog');
Route::get('/archi',[
	'uses'=>'PageController@archiving',
	'as'=>'marcellaarchives.single']);


Route::post('/posts/{post}/{user}/comments','CommentsController@addcomment')->middleware('auth');
Route::get('/moderate','CommentsController@moderate')->middleware('author');
Route::get('/moderate/{id}', 'CommentsController@util')->middleware('author');
Route::get('/no-moderate/{id}', 'CommentsController@noutil')->middleware('author');
Route::get('/hellcat', 'CommentsController@hellcat')->middleware('auth');



