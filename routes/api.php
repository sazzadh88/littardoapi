<?php

Route::get('banners','AppController@banners');
Route::get('categories','AppController@categories');
Route::get('getSubCategory/{id}','AppController@getSubCategory');
Route::group(['prefix' => 'user'], function () {

    Route::post('register','UserController@register');

});
