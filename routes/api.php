<?php


Route::group(['prefix' => 'user'], function () {

    Route::get('get/{id}', function ($id){
        return \App\User::find($id);
    });
});
