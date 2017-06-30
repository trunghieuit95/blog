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
//Teacher
Route::get('teacher/reset', 'TeacherAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('teacher/email', 'TeacherAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('teacher/reset/{token}', 'TeacherAuth\ResetPasswordController@showResetForm');
Route::post('teacher/reset', 'TeacherAuth\ResetPasswordController@reset');

Auth::routes();

Route::get('/home', 'HomeController@index');
