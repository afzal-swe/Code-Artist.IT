<?php

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
    Route::controller(HomePageController::class)->group(function () {
        Route::get('managerial-panel', 'Managerial_Panel_View')->name('managerial_panel.view');
    });
    Route::controller(ContactController::class)->group(function () {
        Route::get('contact', 'Contact_Page')->name('contact.page');
    });
});



require __DIR__ . '/auth.php';
