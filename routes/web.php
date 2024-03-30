<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about');
Route::get('/our-activities', [PageController::class, 'ourActivities'])->name('activities');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/soudure', [PageController::class, 'soudure'])->name('soudure');
Route::get('/fraisage', [PageController::class, 'fraisage'])->name('fraisage');
Route::get('/garniture', [PageController::class, 'garniture'])->name('garniture');
Route::get('/mecanique', [PageController::class, 'mecanique'])->name('mecanique');
Route::get('/tournage', [PageController::class, 'tournage'])->name('tournage');
Route::get('/maintenance', [PageController::class, 'maintenance'])->name('maintenance');

