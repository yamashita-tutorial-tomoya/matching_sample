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

//"middleware" => "auth"でユーザー認証済みかどうかを判定
//ユーザー認証済みかつprefexがusersのURLにのみgroup内部のルーティングが適用される
Route::group(['prefix' => 'users', 'middleware' => 'auth'], function(){
    Route::get('show/{id}', 'UserController@show')->name('users.show');
});


Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
