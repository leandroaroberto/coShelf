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

Route::get('/', function () {
    return view('index');    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Maker Routes */

Route::get('/maker','Maker\makerController@index');

Route::get('/inventoryList','Maker\makerController@inventoryList');

Route::get('/inventoryList/{id?}','Maker\makerController@inventoryShow')->where('id','[0-9]+');

//Route::post('/inventoryList/Add','Maker\makerController@store');
Route::post('/inventoryList/Add','Maker\makerController@storeProduct');

Route::get('/inventoryList/search','Maker\makerController@searchProduct');

Route::get('/inventoryList/Add','Maker\makerController@addProduct');

Route::get('/inventoryList/Edit/{id}','Maker\makerController@editProduct');


