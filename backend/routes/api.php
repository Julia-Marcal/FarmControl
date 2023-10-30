<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Api',], function () {
    Route::get('users/', 'UserController@index');
    Route::post('users/', 'UserController@store');

    Route::get('farms/', 'FarmController@index');
    Route::post('farms/', 'FarmController@store');
});

