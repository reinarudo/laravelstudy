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
fr rey:
always remember to put the most viewed page here since laravel will go through the elements until it finds a match
*/

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});


Route::get('/', function () {
    return view('welcome');
});
