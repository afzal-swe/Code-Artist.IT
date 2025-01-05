<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminHomeController;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::group(['prefix' => 'author'], function () {

        Route::controller(AdminHomeController::class)->group(function () {
            Route::get('/dashboard', 'admin_home')->name('admin_home');
        });
    });



    // Route::group(['prefix' => 'page'], function () {
    //     Route::controller(ContactController::class)->group(function () {
    //         Route::get('/contact', 'Contact_Page')->name('contact.page');
    //     });
    //     Route::controller(AboutController::class)->group(function () {
    //         Route::get('/about', 'About_Page')->name('about.page');
    //     });
    // });
});
