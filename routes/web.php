<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/blogit',[UserController::class, 'index']);
Route::get('/register',[UserController::class, 'signUpForm']);
Route::post('/adduser',[UserController::class, 'adduser']);
