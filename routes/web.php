<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomePageController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;


Route::group(['prefix' => '/'], function () {
    Route::controller(HomePageController::class)->group(function () {
        Route::get('/', 'home_page')->name('home_page');
    });
    Route::controller(AboutController::class)->group(function () {
        Route::get('about', 'About_Page')->name('about.page');
    });
    Route::controller(ContactController::class)->group(function () {
        Route::get('contact', 'Contact_Page')->name('contact.page');
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
