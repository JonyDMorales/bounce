<?php

Route::get('/', function () {
    //return view('auth.login');
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('home', 'EventsController@index')->name('home');