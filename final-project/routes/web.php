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

//Resource Controllers Routes

   

Route::resource('utilisateurs','UserController');

//Auth Controllers Routes
Auth::routes();


//Home Controllers Routes
Route::get('/home', 'HomeController@index')->name('home');

//Routes without any middleware
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

//Routes with middleware author
Route::prefix('/admin')->group(function(){
Route::group(['middleware' => 'author'], function () {
Route::resource('articles','PostController', ['except' => ['show']]);

Route::get('/categories/corbeille','CategoriesController@trash')->name('categorie.corbeille');
Route::delete('/categories/restaurer/{id}','CategoriesController@restoretrash')->name('categorie.restore');
Route::delete('/categories/kill/{id}','CategoriesController@kill')->name('categorie.kill');
Route::resource('categorie','CategoriesController', ['except' => ['create','show']]);

Route::get('/etiquette/corbeille','TagController@trash')->name('tags.corbeille');
Route::delete('/etiquette/restaurer/{id}','TagController@restoretrash')->name('tags.restore');
Route::delete('/etiquette/kill/{id}','TagController@kill')->name('tags.kill');
Route::resource('tags','TagController', ['except' => ['create','show']]);

Route::get('/settings-page-daccueuil','SettingsController@index')->name('settings');
Route::get('/settings-contact','SettingsController@index1')->name('settings1');
Route::get('/settings-a-propos','SettingsController@index2')->name('settings2');
Route::get('/settings/updating','SettingsController@updating')->name('settings.updating');

Route::get('/delete-comments','CommentadminController@destroy');
Route::get('/moderate','CommentadminController@moderate');
Route::get('/moderate/{id}', 'CommentadminController@util');
Route::get('/no-moderate/{id}', 'CommentadminController@noutil');
});
});

//Routes with middleware auth

Route::group(['middleware' => 'auth'], function () {
Route::get('/commentaire/{slug}','PageController@sluggerpost')->name('single.postslugger');
Route::post('/posts/{post}/{user}/comments','CommentsController@addcomment');
Route::get('/hellcat', 'CommentsController@hellcat');
Route::resource('profile','ProfileController');
Route::resource('commentaires','CommentsController',['except' => ['create','show','edit','update','destroy']]);

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
