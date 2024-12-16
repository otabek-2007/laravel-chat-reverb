<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

// Multilingual (Lang switch)
Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('change.language');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Home route (Chat Page)
Route::get('/', function () {
    return view('layouts.app');
})->name('home')->middleware('auth');
