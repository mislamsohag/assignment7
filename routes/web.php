<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//This Route via UserController
Route::get('/user', [UserController::class, 'simpleMsg']);
