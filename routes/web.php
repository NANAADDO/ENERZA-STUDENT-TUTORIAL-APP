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

Route::get('/','RootController@Welcome');
Route::post('DisplaySubject','RootController@ShowSelectedCourse');
Route::post('DisplaySubjectContent','RootController@SelectedSubjectContent');
Route::post('DisplayQuizContent','RootController@ShowSelectedQuizContent');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('CourseSubject', 'RootController@ShowSelectedCourseID');
Route::get('LoginStudent', 'Auth\LoginController@AuthenticateStudent')->name('LoginStudent');
Route::get('home', 'HomeController@HomePanel');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
