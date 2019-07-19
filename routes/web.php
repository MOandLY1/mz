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
    Route::match(['post','get'],'register','IndexController@register');
    Route::match(['post','get'],'user_r','IndexController@user_r');
    Route::match(['post','get'],'user_l','IndexController@user_l');
    Route::match(['post','get'],'mzsc1','IndexController@mzsc1');

    Route::match(['post','get'],'error','IndexController@error');
    Route::match(['post','get'],'Personal_Center','IndexController@Personal_Center');
    Route::match(['post','get'],'Modify_personal_information','UserController@Modify_personal_information');
    Route::match(['post','get'],'Binding_Mailbox','UserController@Binding_Mailbox');
    Route::match(['post','get'],'binding_phone','UserController@binding_phone');
    Route::match(['post','get'],'ceshi','UserController@ceshi');
    Route::match(['post','get'],'Submission_Password_protection','UserController@Submission_Password_protection');
    Route::match(['post','get'],'New_username','UserController@New_username');
    Route::match(['post','get'],'Navigation_mzsc','IndexController@Navigation_mzsc');
    Route::match(['post','get'],'Commodity_details','IndexController@Commodity_details');
    Route::match(['post','get'],'search','IndexController@search');



});
