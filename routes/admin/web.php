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
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', "EntryController@loginForm");
    Route::post('/login', "EntryController@login");
    Route::get('/index', "EntryController@index");
    Route::get('/logout', "EntryController@logout");
    Route::get('/changePassword', "ProfileController@passwordForm");
    Route::post('/changePassword', "ProfileController@changePassword");
    //标签路由管理
    Route::resource('tag','TagController');
    //课程路由管理
    Route::resource('lesson','LessonController');
});
