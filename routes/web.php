<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login', 'MainController@loginPage')->name('login');
Route::post('/login', 'MainController@login')->name('userLogin');
Route::get('/register', 'MainController@getRegister')->name('getRegister');
Route::post('/register', 'MainController@register')->name('register');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/', 'MainController@index')->name('index');
    Route::get('/logout', 'MainController@logout')->name('logout');

    Route::group(['prefix' => 'lists'], function () {

        Route::get('/', 'ListController@index')->name('lists');
        Route::get('/create', 'ListController@create')->name('createList');
        Route::post('/store', 'ListController@store')->name('storeList');

        Route::group(['prefix' => '{list}'], function () {
            Route::get('/', 'ListController@show')->name('showList');
            Route::get('/edit', 'ListController@edit')->name('editList');
            Route::post('/update', 'ListController@update')->name('updateList');
            Route::get('/delete', 'ListController@destroy')->name('deleteList');
        });

    });

    Route::group(['prefix' => 'items'], function () {

        Route::get('/', 'ItemController@index')->name('items');
        Route::get('/create', 'ItemController@create')->name('createItem');
        Route::post('/store', 'ItemController@store')->name('storeItem');

        Route::group(['prefix' => '{item}'], function () {
            Route::get('/', 'ItemController@show')->name('showItem');
            Route::get('/edit', 'ItemController@edit')->name('editItem');
            Route::post('/update', 'ItemController@update')->name('updateItem');
            Route::get('/delete', 'ItemController@destroy')->name('deleteItem');
        });

    });
});


