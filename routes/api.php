<?php

Route::get('banners','AppController@banners');
Route::get('categories','AppController@categories');
Route::get('getSubCategory/{id}','AppController@getSubCategory');
Route::get('getSubSubCategory/{id}','AppController@getSubSubCategory');
Route::group(['prefix' => 'user'], function () {

    Route::post('register','UserController@register');

});
