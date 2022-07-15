<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/', 'DashboardController@index')->name('/');

    Route::get('category', 'CategoryController@index')->name('category');
    Route::get('category/create', 'CategoryController@create')->name('category.create');
    Route::post('category', 'CategoryController@insert')->name('category.store');
    Route::get('category/edit/{category}', 'CategoryController@edit')->name('category.edit');
    Route::put('category', 'CategoryController@update')->name('category.update');
    Route::delete('category', 'CategoryController@delete')->name('category.delete');

    Route::get('goods', 'GoodsController@index')->name('goods');
    Route::get('goods/create', 'GoodsController@create')->name('goods.create');
    Route::post('goods', 'GoodsController@insert')->name('goods.store');
    Route::get('goods/edit/{goods}', 'GoodsController@edit')->name('goods.edit');
    Route::put('goods', 'GoodsController@update')->name('goods.update');
    Route::delete('goods', 'GoodsController@delete')->name('goods.delete');

    Route::get('incomming_goods', 'IncommingGoodsController@index')->name('incomming_goods');
    Route::get('incomming_goods/create', 'IncommingGoodsController@create')->name('incomming_goods.create');
    Route::post('incomming_goods', 'IncommingGoodsController@insert')->name('incomming_goods.store');
    Route::get('incomming_goods/edit/{incomming_goods}', 'IncommingGoodsController@edit')->name('incomming_goods.edit');
    Route::put('incomming_goods', 'IncommingGoodsController@update')->name('incomming_goods.update');
    Route::delete('incomming_goods', 'IncommingGoodsController@delete')->name('incomming_goods.delete');
    
    Route::get('exit_goods', 'ExitGoodsController@index')->name('exit_goods');
    Route::get('exit_goods/create', 'ExitGoodsController@create')->name('exit_goods.create');
    Route::post('exit_goods', 'ExitGoodsController@insert')->name('exit_goods.store');
    Route::get('exit_goods/edit/{exit_goods}', 'ExitGoodsController@edit')->name('exit_goods.edit');
    Route::put('exit_goods', 'ExitGoodsController@update')->name('exit_goods.update');
    Route::delete('exit_goods', 'ExitGoodsController@delete')->name('exit_goods.delete');

    Route::get('user', 'userController@index')->name('user');
    Route::get('user/create', 'userController@create')->name('user.create');
    Route::post('user', 'userController@insert')->name('user.store');
    Route::get('user/edit/{user}', 'userController@edit')->name('user.edit');
    Route::put('user', 'userController@update')->name('user.update');
    Route::delete('user', 'userController@delete')->name('user.delete');
});