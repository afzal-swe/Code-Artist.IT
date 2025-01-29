<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomePageController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\BlogDetailsController;
use App\Http\Controllers\frontend\ProjectDetailsController;
use App\Http\Controllers\frontend\SisterConcranController;
use App\Http\Controllers\frontend\FaqController;


Route::group(['prefix' => '/'], function () {
    Route::controller(HomePageController::class)->group(function () {
        Route::get('/', 'home_page')->name('home_page');
    });
    Route::controller(AboutController::class)->group(function () {
        Route::get('about', 'About_Page')->name('about.page');
    });
    Route::controller(FaqController::class)->group(function () {
        Route::get('faq', 'Faq_Page')->name('faq.page');
    });


    Route::group(['prefix' => 'panel'], function () {
        Route::controller(HomePageController::class)->group(function () {
            Route::get('/managerial', 'Managerial_Panel_View')->name('managerial_panel.view');
            Route::get('/advisory', 'Advisory_Panel_View')->name('advisory_panel.view');
            Route::get('/employee', 'Full_Time_Employee_iew')->name('full_time_employee.view');
            Route::get('/project-based-employee', 'Project_Based_Empolyee_View')->name('project_based_empolyee.view');
            Route::get('/intern', 'Intern_View')->name('intern.view');
        }); //end
    }); //end


    Route::group(['prefix' => 'contact'], function () {
        Route::controller(ContactController::class)->group(function () {
            Route::get('/', 'Contact_Page')->name('contact.page');
            Route::post('/send', 'Contact_Send')->name('contact.send');
        });
    });
    Route::controller(BlogDetailsController::class)->group(function () {
        Route::get('blog-details', 'Blog_Details')->name('blog_details.page');
    });
    Route::controller(ProjectDetailsController::class)->group(function () {
        Route::get('project-details', 'Project_Details')->name('project_details.page');
    });
    Route::controller(SisterConcranController::class)->group(function () {
        Route::get('sister-concern-details', 'Sister_Concern_Details')->name('sister_concern_details.page');
    });
});



require __DIR__ . '/auth.php';
