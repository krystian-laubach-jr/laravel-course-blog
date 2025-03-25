<?php

use Illuminate\Support\Facades\Route;

Route::get('' , function () {
  $categories = DB::table('categories')->get();
  return view(  'home', ['categories' => $categories ]);
})->name('home');

Route::view( 'about' , 'about')->name('about');
Route::view( 'contact' , 'contact')->name('contact');
Route::view('article', 'article')->name('article');