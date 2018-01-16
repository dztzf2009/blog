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
Route::group(['namespace' => 'Api'], function () {
    //显示标签
    Route::get('tags', "ContentController@tags");
    //显示课程
    Route::get('lesson/{tid}', "ContentController@lesson");
    //推荐课程
    Route::get('commendLesson/{row}', "ContentController@commendLesson");
    //热门课程
    Route::get('hotLesson/{row}', "ContentController@hotLesson");
    //视频列表
    Route::get('videos/{lessonId}', "ContentController@videos");
});
