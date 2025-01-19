<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\ClientFeedbackController;
use App\Http\Controllers\backend\InnovativeProductController;
use App\Http\Controllers\backend\SisterConncernController;
use App\Http\Controllers\backend\OurTimeLineController;
use App\Http\Controllers\backend\DevelopmentSoftwareController;
use App\Http\Controllers\backend\BlogsController;
use App\Http\Controllers\backend\OurExparticsController;
use App\Http\Controllers\backend\ClientsController;
use App\Http\Controllers\backend\WeHaveController;
use App\Http\Controllers\backend\ServicesAreasController;
use App\Http\Controllers\backend\NoticeController;
use App\Http\Controllers\backend\SeoController;
use App\Http\Controllers\backend\SocialController;
use App\Http\Controllers\backend\WebsiteSettingController;
use App\Http\Controllers\backend\PeoplePanelController;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::group(['prefix' => 'author'], function () {

        Route::controller(AdminHomeController::class)->group(function () {
            Route::get('/', 'admin_home')->name('admin_home');
            Route::get('/logout', 'Admin_logout')->name('admin.logout');
            Route::get('/password-change', 'password_change')->name('admin.password_change');
            Route::post('/password-update', 'update_change')->name('pass.update');
        }); //end

        // Banner Route Section Start
        Route::group(['prefix' => 'people-panel'], function () {
            Route::controller(PeoplePanelController::class)->group(function () {
                Route::get('/', 'People_Panel')->name('people_panel.view');
                Route::post('/store', 'People_Panel_Store')->name('people_panel.store');
                Route::get('/status/{id}', 'People_Panel_Status')->name('people_panel.status');
                Route::get('/delete/{id}', 'People_Panel_Delete')->name('people_panel.status');
            });
        }); //end

        // Banner Route Section Start
        Route::group(['prefix' => 'banner'], function () {
            Route::controller(BannerController::class)->group(function () {
                Route::get('/', 'Banner_View')->name('banner.view');
                Route::post('/store', 'Banner_Store')->name('banner.store');
                Route::get('/status/{id}', 'Home_Page_Status')->name('home_page.status');
                Route::get('/delete/{id}', 'Banner_Delete')->name('delete.status');
            });
        }); //end

        // Client Feedback Route Section Start
        Route::group(['prefix' => 'client-feedback'], function () {
            Route::controller(ClientFeedbackController::class)->group(function () {
                Route::get('/', 'Client_Feedback_View')->name('feedback.view');
                Route::post('/store', 'Feedback_Store')->name('feedback.store');
                Route::get('/status/{id}', 'Feedback_Status')->name('feedback.status');
                Route::get('/delete/{id}', 'Feedback_Delete')->name('feedback.delete');
            });
        }); //end

        // Innovative Product Route Section Start
        Route::group(['prefix' => 'innovative-product'], function () {
            Route::controller(InnovativeProductController::class)->group(function () {
                Route::get('/', 'Innovative_Product_View')->name('innovative_product.view');
                Route::post('/store', 'Innovative_Product_Store')->name('innovative_product.store');
                Route::get('/status/{id}', 'Innovative_Product_Status')->name('innovative_product.status');
                Route::get('/delete/{id}', 'Innovative_Product_Delete')->name('innovative_product.delete');
            });
        }); //end

        // Sister Concern Route Section Start
        Route::group(['prefix' => 'sister-concern'], function () {
            Route::controller(SisterConncernController::class)->group(function () {
                Route::get('/', 'sister_concern_View')->name('sister_concern.view');
                Route::post('/store', 'Sister_Concern_Store')->name('sister_concern.store');
                Route::get('/status/{id}', 'Sister_Conncern_Status')->name('sister_conncern.status');
                Route::get('/delete/{id}', 'Sister_Conncern_Delete')->name('sister_conncern.delete');
            });
        }); //end

        // Our Timeline Group Route Section
        Route::group(['prefix' => 'our-timeline'], function () {
            Route::controller(OurTimeLineController::class)->group(function () {
                Route::get('/', 'Our_Timeline_View')->name('our_timeline.view');
                Route::post('/store', 'Our_Timeline_Store')->name('our_timeline.store');
                Route::get('/status/{id}', 'Our_Timeline_Status')->name('our_timeline.status');
                Route::get('/delete/{id}', 'Our_Timeline_Delete')->name('our_timeline.delete');
            });
        }); //end

        // Development Software Group Route Section
        Route::group(['prefix' => 'development-software'], function () {
            Route::controller(DevelopmentSoftwareController::class)->group(function () {
                Route::get('/', 'Development_Software_View')->name('development_software.view');
                Route::post('/store', 'Development_Software_Store')->name('development_software.store');
                Route::get('/status/{id}', 'Development_Software_Status')->name('development_software.status');
                Route::get('/delete/{id}', 'Development_Software_Delete')->name('development_software.delete');
            });
        }); //end

        // Blogs Group Route Section
        Route::group(['prefix' => 'blogs'], function () {
            Route::controller(BlogsController::class)->group(function () {
                Route::get('/', 'Blogs_View')->name('blogs.view');
                Route::post('/store', 'blogs_Store')->name('blogs.store');
                Route::get('/status/{id}', 'blogs_Status')->name('blogs.status');
                Route::get('/delete/{id}', 'Blogs_Delete')->name('blogs.delete');
            });
        }); //end

        // Our Expartics Group Route Section
        Route::group(['prefix' => 'our-expartics'], function () {
            Route::controller(OurExparticsController::class)->group(function () {
                Route::get('/', 'Our_Expartics_View')->name('our_expartics.view');
                Route::post('/store', 'Our_Expartics_Store')->name('our_expartics.store');
                Route::get('/status/{id}', 'Our_Expartics_Status')->name('our_expartics.status');
                Route::get('/delete/{id}', 'Our_Expartics_Delete')->name('our_expartics.delete');
            });
        }); //end

        // We Have Group Route Section
        Route::group(['prefix' => 'we-have'], function () {
            Route::controller(WeHaveController::class)->group(function () {
                Route::get('/', 'We_Have_View')->name('we_have.view');
                Route::post('/store', 'We_Have_Store')->name('we_have.store');
                Route::get('/status/{id}', 'We_Have_Status')->name('we_have.status');
                Route::get('/delete/{id}', 'We_Have_Delete')->name('we_have.delete');
            });
        });

        // Clients Group Route Section
        Route::group(['prefix' => 'clients'], function () {
            Route::controller(ClientsController::class)->group(function () {
                Route::get('/', 'clients_View')->name('clients.view');
                Route::post('/store', 'Clients_Store')->name('clients.store');
                Route::get('/status/{id}', 'Clients_Status')->name('clients.status');
                Route::get('/delete/{id}', 'Clients_Delete')->name('clients.delete');
            });
        }); //end

        // Services Areas Group Route Section
        Route::group(['prefix' => 'service-areas'], function () {
            Route::controller(ServicesAreasController::class)->group(function () {
                Route::get('/', 'Service_Areas_View')->name('service_areas.view');
                Route::post('/store', 'Service_Areas_Store')->name('service_areas.store');
                Route::get('/status/{id}', 'Service_Areas_Status')->name('service_areas.status');
                Route::get('/delete/{id}', 'Service_Areas_Delete')->name('service_areas.delete');
            });
        }); //end

        // Settings Areas Group Route Section
        Route::group(['prefix' => 'settings'], function () {

            Route::group(['prefix' => 'notice'], function () {
                Route::controller(NoticeController::class)->group(function () {
                    Route::get('/', 'Notice_View')->name('notice.view');
                    Route::post('/store', 'Notice_Store')->name('notice.store');
                    Route::get('/status/{id}', 'Notice_Status')->name('notice.status');
                    Route::get('/delete/{id}', 'Notice_Delete')->name('notice.delete');
                });
            }); //end
            Route::group(['prefix' => 'seo'], function () {
                Route::controller(SeoController::class)->group(function () {
                    Route::get('/', 'Seo_View')->name('seo.view');
                    Route::post('/store', 'Seo_Store')->name('seo.add');
                    Route::post('/update/{id}', 'Seo_Update')->name('seo.update');
                });
            }); //end
            Route::group(['prefix' => 'social'], function () {
                Route::controller(SocialController::class)->group(function () {
                    Route::get('/', 'Social_View')->name('social.view');
                    Route::post('/store', 'Social_Store')->name('social.store');
                    Route::post('/update/{id}', 'social_update')->name('social.update');
                });
            }); //end
            Route::group(['prefix' => 'website'], function () {
                Route::controller(WebsiteSettingController::class)->group(function () {
                    Route::get('/', 'Website_Settings_View')->name('website_settings.view');
                    Route::post('/store', 'Website_Setting_Store')->name('website.setting.store');
                    Route::post('/update/{id}', 'website_update')->name('website.setting_update');
                });
            });
        });
    });
});
