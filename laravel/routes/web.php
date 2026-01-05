<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\MealController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello laravel';
});

Route::get('/hello/{name}/info', function ($name) {
    return 'hello' . $name ;
});


Route::get('/deneme', function(){
    return view('example');
});

Route::get('/profilim',[ProfilController::class, 'goster']);

Route::get('/abc', function () {
    return 'Buğraaaaaaa';
});
Route::resource('customers',CustomerController::class);
Route::resource('exercises',ExerciseController::class);
Route::resource('foods',FoodController::class);
Route::resource('meals',MealController::class);
Route::resource('activities',ActivityController::class);
