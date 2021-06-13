<?php

use App\Http\Controllers\imageUploadController;
use Illuminate\Support\Facades\Route;



Route::get('/', 'imageUploadController@index')->name('index');
//一覧表示画面
Route::get('/create', 'imageUploadController@create')->name('create');
//画像投稿画面
Route::post('/create', 'imageUploadController@store')->name('store');
//投稿処理の中身
Route::post('/delete/{id}','imageUploadController@delete')->name('delete');
//削除処理


