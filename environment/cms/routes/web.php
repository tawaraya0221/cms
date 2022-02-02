<?php
use App\Book;
use Illuminate\Http\Request; 

//ダッシュボード表示
Route::get('/', 'TargetsController@index');

//登録処理
Route::post('/targets','TargetsController@store');

//更新画面
Route::post('/targetsedit/{targets}','TargetsController@edit');

//更新処理
Route::post('/targets/update','TargetsController@update');

//削除
Route::delete('/target/{target}','TargetsController@destroy');

//規約
Route::post('formPost', 'TargetsController@formPost');

//メール
Route::post('sendMail', 'TargetsController@sendMail');



//Auth
Auth::routes();
Route::get('/home', 'TargetsController@index')->name('home');
