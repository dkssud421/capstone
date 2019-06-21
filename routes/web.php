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

Route::get('/','mainpageController@index');

Route::get('protected',['middleware' => 'auth', function(){

}]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('notice', 'noticeController');
Route::resource('lecture', 'lectureController');
Route::get('scholarship3','scholarship3Controller@index');
Route::resource('club', 'clubController');

Route::resource('comments', 'CommentsController', ['only' => ['update', 'destroy']]);

Route::resource('lecture.comments', 'CommentsController', ['only'=>'store']);


