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
//Resource Controllers Routes

Auth::routes();
//Auth Controllers Routes
Route::get('/home', 'HomeController@index')->name('home');
//Home Controllers Routes


Route::get('/trash', 'PostController@trash');
Route::delete('/trash/{id}', 'PostController@kill');
Route::delete('/restore/{id}', 'PostController@restoretrash');
Route::get('/util/{id}', 'UserController@util');
Route::get('/no-util/{id}', 'UserController@noutil');
Route::get('/pagenotfound','HomeController@pagenotfound')->name('errors');
Route::get('/posts/{slug}','PageController@slugpost')->name('single.posting');
Route::get('/cat/{slugs}','PageController@categorie')->name('categorie.single');
Route::get('/archi', 'PageController@archiving')->name('marcellaarchives.single');
Route::get('/about', 'PageController@about');
Route::get('/blog', 'PageController@blog');
Route::get('/', 'PageController@frontpage');
Route::get('/etiquettes/{slugger}','PageController@tagname')->name('etiquettes.single');
Route::get('/articles-index','IndexController@articleindex')->name('articles.indexpage');
Route::get('/commentaires-index','IndexController@commentsindex')->name('comments.indexpage');
Route::get('/utilisateurs-index','IndexController@userindex')->name('user.indexpage');
Route::get('/contact','MailController@contact')->name('contactmail.single');
Route::get('/send','MailController@send')->name('sendmail.single');


//Routes without any middleware


Route::group(['middleware' => 'author'], function () {
Route::get('/settings-page-daccueuil','SettingsController@index')->name('settings');
Route::get('/settings-contact','SettingsController@index1')->name('settings1');
Route::get('/settings-a-propos','SettingsController@index2')->name('settings2');
Route::get('/settings/updating','SettingsController@updating')->name('settings.updating');
Route::get('/moderate','CommentsController@moderate');
Route::get('/moderate/{id}', 'CommentsController@util');
Route::get('/no-moderate/{id}', 'CommentsController@noutil');
});

//Routes with middleware author

Route::group(['middleware' => 'auth'], function () {
Route::get('/commentaire/{slug}','PageController@sluggerpost')->name('single.postslugger');
Route::post('/posts/{post}/{user}/comments','CommentsController@addcomment');
Route::get('/hellcat', 'CommentsController@hellcat');
});

//Routes with middleware auth



//Route::get('/contact',[
//	'uses'=>'MailController@contact',
//	'as'=>'contactmail.single']);

//Route::post('/send',[
//	'uses'=>'MailController@send',
//	'as'=>'sendmail.single']);

//Route::get('/articles-index',[
//	'uses'=>'IndexController@articleindex',
//	'as'=>'articles.indexpage']);

//Route::get('/commentaires-index',[
//	'uses'=>'IndexController@commentsindex',
//	'as'=>'comments.indexpage']);

//Route::get('/utilisateurs-index',[
//	'uses'=>'IndexController@userindex',
//	'as'=>'user.indexpage']);

//Route::get('/pagenotfound',[
//	'uses'=>'HomeController@pagenotfound',
//	'as'=>'errors']);

//Route::get('settings-page-daccueil',[
//	'uses'=>'SettingsController@index',
//	'as'=>'settings'])->middleware('author');

//Route::get('settings-contact',[
//	'uses'=>'SettingsController@index1',
//	'as'=>'settings1'])->middleware('author');

//Route::get('settings-a-propos',[
//	'uses'=>'SettingsController@index2',
//	'as'=>'settings2'])->middleware('author');

//Route::post('/settings/updating',[
//    'uses'=>'SettingsController@updating',
//    'as'=>'settings.updating',
//	])->middleware('author');

//Route::get('/posts/{slug}',[
//	'uses'=>'PageController@slugpost',
//	'as'=>'single.posting']);

//Route::get('/commentaire/{slug}',[
//	'uses'=>'PageController@sluggerpost',
//	'as'=>'single.postslugger'])->middleware('auth');


//Route::get('/cat/{slugs}',[
//	'uses'=>'PageController@categorie',
//	'as'=>'categorie.single']);

//Route::get('/etiquettes/{slugger}',[
//	'uses'=>'PageController@tagname',
//	'as'=>'etiquettes.single']);


//Route::get('/', 'PageController@frontpage');
////Route::get('/contact', 'PageController@contact');
//Route::get('/about', 'PageController@about');
//Route::get('/blog', 'PageController@blog');
//Route::get('/archi',[
//	'uses'=>'PageController@archiving',
//	'as'=>'marcellaarchives.single']);


//Route::post('/posts/{post}/{user}/comments','CommentsController@addcomment')->middleware('auth');
//Route::get('/moderate','CommentsController@moderate')->middleware('author');
//Route::get('/moderate/{id}', 'CommentsController@util')->middleware('author');
//Route::get('/no-moderate/{id}', 'CommentsController@noutil')->middleware('author');
//Route::get('/hellcat', 'CommentsController@hellcat')->middleware('auth');
