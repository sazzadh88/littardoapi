<?php

Route::post('banners','AppController@banners');
Route::group(['prefix' => 'user'], function () {

    Route::post('register','UserController@register');

});
