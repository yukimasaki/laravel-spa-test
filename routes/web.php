<?php

use Illuminate\Support\Facades\Route;

// APIのURL以外のリクエストに対してはindexテンプレートを返す
Route::get('/{any?}', fn() => view('index'))->where('any', '.+');