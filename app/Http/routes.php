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
Route::get('blog/{slug}', array('as' => 'blog.single', 'uses' => 'BlogController@getSingle'))
        ->where('slug', '[\w\d\-\_]+'); // create a rule for slug that only accepts words, digits, dashes and underscores

Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');

/**
 * fr rey:
 * tell laravel that we manage our resource so we do not need to specify all the routes because it
 * assumes that the routes already contain the necessary methods e.g. create, store, edit, edit, update etc...
 */
Route::resource('posts', 'PostController');
