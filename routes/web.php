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
//Student
Route::get('student/reset', 'StudentAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('student/email', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('student/reset/{token}', 'StudentAuth\ResetPasswordController@showResetForm');
Route::post('student/reset', 'StudentAuth\ResetPasswordController@reset');

Auth::routes();

Route::get('/home', 'HomeController@index');
