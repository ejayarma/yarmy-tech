<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\ServicesPageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', HomePageController::class)->name('home');
Route::get('/about-us', AboutPageController::class)->name('about');
Route::get('/services', ServicesPageController::class)->name('services');
Route::get('/contact', [ContactPageController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactPageController::class, 'store'])->middleware('throttle:5,1')->name('contact.store');
Route::get('/terms', [LegalController::class, 'terms'])->middleware('throttle:10,1')->name('legal.terms');
Route::get('/privacy-policy', [LegalController::class, 'privacy'])->middleware('throttle:10,1')->name('legal.privacy');

Route::get('9sf5C2huYH1c73KaSLr0pJDrCPZ8jz', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
