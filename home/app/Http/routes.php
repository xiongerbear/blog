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

Route::auth();

/**
 * 前段主要分组
 */
Route::group(['as' => 'home::'], function () {
    Route::get('/', [
        'as' => 'index_list',
        'uses' => 'HomeController@index'
    ]);
});