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


use Illuminate\Support\Facades\Schema;

Schema::defaultStringLength(191);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::match(['get','post'],'/home',['uses'=>'HomeController@execute','as'=>'home']);

Route::match(['get','post'],'/editor/{id?}',['uses'=>'EditorController@execute','as'=>'editor']);
Route::match(['get','post'],'/delete/{id?}',['uses'=>'DeleteController@execute','as'=>'delete']);
Route::match(['get','post'],'/edit',['uses'=>'EditController@execute','as'=>'edit']);