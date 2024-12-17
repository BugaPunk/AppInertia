<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    sleep(1);
    return Inertia::render('Home');
})->name('home');

Route::inertia('/about', 'About', ['user'=>'Ronald'])->name('about');

Route::inertia('/register', 'Auth/Register') -> name('register');