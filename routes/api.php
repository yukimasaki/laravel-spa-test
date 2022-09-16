<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// 認証関係
//////////////////////////////////////////////////////////
// 会員登録
Route::post('/register', 'Auth\RegisterController@register')->name('register');
// ログイン
Route::post('/login', 'Auth\LoginController@login')->name('login');
// ログアウト
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
// ログインユーザー
Route::get('/user', fn() => Auth::user())->name('user');

// モデル関係
//////////////////////////////////////////////////////////
// License
Route::resource('/licenses', App\Http\Controllers\LicenseController::class);
