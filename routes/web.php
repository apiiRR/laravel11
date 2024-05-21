<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
  return view('posts', ['title' => 'Posts']);
});

Route::get('/posts/{id}', function ($id) {
  return view('post', ['title' => 'Post']);
});

Route::get('/about', function () {
  return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
  return view('contact', ['title' => 'Contact']);
});
