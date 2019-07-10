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

Route::get('/a', function () {
    echo "999999999999999";
//    return view('welcome');
});



Route::group(['namespace'=>'Web'],function (){
    Route::match(['post','get'],'/index','IndexController@index');
    Route::match(['post','get'],'/test2','IndexController@test');
    Route::match(['post','get'],'/land','IndexController@land');

    Route::match(['post','get'],'/home/home/home','IndexController@home');
    Route::match(['post','get'],'my_two','IndexController@my_two');
    Route::match(['post','get'],'mzsc','IndexController@mzsc');
});
