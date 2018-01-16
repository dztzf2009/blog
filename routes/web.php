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

Route::get('/', 'Admin\EntryController@login');
Route::get('/upload', function () {
    return view('upload');
});
Route::post('/component/upload', 'Component\UploadController@upload');
include __DIR__ . '/admin/web.php';
