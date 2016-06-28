<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
*
* fr rey:
* always remember to put the most viewed page here since laravel will go through the elements until it finds a match
*/

//Authentication Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('blog/{slug}', array('as' => 'blog.single', 'uses' => 'BlogController@getSingle'))
        ->where('slug', '[\w\d\-\_]+'); // create a rule for slug that only accepts words, digits, dashes and underscores
Route::get('blog', array('as' => 'blog.index', 'uses' => 'BlogController@getIndex'));
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');

/**
 * fr rey:
 * tell laravel that we manage our resource so we do not need to specify all the routes because it
 * assumes that the routes already contain the necessary methods e.g. create, store, edit, edit, update etc...
 */
Route::resource('posts', 'PostController');
