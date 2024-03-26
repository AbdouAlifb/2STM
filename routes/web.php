<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about');
Route::get('/our-activities', [PageController::class, 'ourActivities'])->name('activities');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
