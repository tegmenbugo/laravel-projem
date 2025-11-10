<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return 'hello laravel';
});
Route::get('/hello/{name}/info', function ($name) {
    return 'hello' . $name ;
});
Route::get('/tmp', [TempController ::class, 'tempfunction']);

