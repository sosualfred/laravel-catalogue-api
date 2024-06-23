<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [WebsiteController::class, 'home']);
Route::get('/services', [WebsiteController::class, 'services']);
Route::get('/welcome', [WebsiteController::class, 'welcome']);
Route::get('about', [WebsiteController::class, 'about']);

Route::get('/users', [UserController::class, 'index']);

