<?php


Route::group(['prefix' => 'user'], function () {

    Route::post('register','UserController@register');
    Route::post('login','UserController@login');
});
