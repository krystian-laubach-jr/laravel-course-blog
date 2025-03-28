<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('' , [HomeController::class, 'index'] )->name('home');

Route::view( 'about' , 'about')->name('about');
Route::view( 'contact' , 'contact')->name('contact');
Route::get('article/{post}', [PostController::class, 'show'])->name('article');