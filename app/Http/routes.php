<?php


Route::group(['prefix' => 'admin'],function(){

    Route::post('categories', [ 'as' => 'admin.categories.store' ,'uses' => 'CategoryController@store']);
    Route::get('categories/create', [ 'as' => 'admin.categories.create' ,'uses' => 'CategoryController@create']);
    Route::get('categories/{id}/destroy',[ 'as' => 'admin.categories.destroy' ,'uses' => 'CategoryController@destroy']);
    Route::get('categories/{id}/edit',[ 'as' => 'admin.categories.edit' ,'uses' => 'CategoryController@edit']);
    Route::post('categories/{id}/update',[ 'as' => 'admin.categories.update' ,'uses' => 'CategoryController@update']);
    Route::get('categories', ['as' =>'admin.categories.index', 'uses' => 'CategoryController@index']);

    Route::post('products', [ 'as' => 'admin.products.store' ,'uses' => 'ProductController@store']);
    Route::get('products/create', [ 'as' => 'admin.products.create' ,'uses' => 'ProductController@create']);
    Route::get('products/{id}/destroy',[ 'as' => 'admin.products.destroy' ,'uses' => 'ProductController@destroy']);
    Route::get('products/{id}/edit',[ 'as' => 'admin.products.edit' ,'uses' => 'ProductController@edit']);
    Route::post('products/{id}/update',[ 'as' => 'admin.products.update' ,'uses' => 'ProductController@update']);
    Route::get('products', ['as' =>'admin.products.index', 'uses' => 'ProductController@index']);

});



Route::get('/', 'Controller@welcome');




