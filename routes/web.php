<?php

use Illuminate\Support\Facades\Route;

Route::get('/','indexController@index');

Route::get('/', function () {
    return view('welcome');
});
