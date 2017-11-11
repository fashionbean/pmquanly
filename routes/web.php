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
    return view('welcome');
});
Route::get('manage', function(){ return view('admin.index'); });
Route::prefix('cate')->group(function(){
    Route::get('add', ['as' => 'getCateAdd', 'use' => 'Admin/CategoryController@add']);
});