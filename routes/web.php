<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BabyController;
use App\Http\Controllers\CoupleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'loginProcess'])->name('loginProcess');
});
Route::POST('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('homepage.index');
})->name('home');
Route::prefix('gallery')->name('gallery.')->group(function () {
    Route::get('/couple', [CoupleController::class, 'showIndex'])->name('couple');

    Route::get('/family', [FamilyController::class, 'showIndex'])->name('family');

    Route::get('/portrait', [BabyController::class, 'showIndex'])->name('portrait');

    Route::get('/event', [EventController::class, 'showIndex'])->name('event');
});
Route::get('/about', function () {
    return view('homepage.about');
})->name('about');

Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard.index');
        })->name('dashboardAdmin');
    });
});




Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::prefix('superadmin')->group(function () {
        Route::prefix('dashboard')->group(function () {
            Route::get('/', [SuperAdminController::class, 'index'])->name('dashboardSuperAdmin');
            Route::get('/update-page-description/{id}', [SuperAdminController::class, 'editPageDescriptions'])->name('editPageDescriptions');
            Route::patch('/update-page-description/{id}', [SuperAdminController::class, 'processEditPageDescriptions'])->name('processEditPageDescriptions');
            Route::prefix('admin-list')->group(function () {
                Route::get('/', [SuperAdminController::class, 'adminList'])->name('adminList');
                Route::get('/edit/{id}', [SuperAdminController::class, 'editadminList'])->name('adminList.edit');
                Route::patch('/edit/{id}', [SuperAdminController::class, 'updateadminList'])->name('adminList.update');
                Route::get('/create', [SuperAdminController::class, 'createadminList'])->name('adminList.create');
                Route::post('/create', [SuperAdminController::class, 'createprocessadminList'])->name('adminList.store');
                Route::delete('/delete/{id}', [SuperAdminController::class, 'deleteadminList'])->name('adminList.delete');
            });
            Route::prefix('superadmin-list')->group(function () {
                Route::get('/', [SuperAdminController::class, 'superadminList'])->name('superadminList');
                Route::get('/edit/{id}',  [SuperAdminController::class, 'editsuperadminList'])->name('superadminList.edit');
                Route::patch('/edit/{id}',  [SuperAdminController::class, 'updatesuperadminList'])->name('superadminList.update');
                Route::get('/create', [SuperAdminController::class, 'createsuperadminList'])->name('superadminList.create');
                Route::post('/create', [SuperAdminController::class, 'createprocesssuperadminList'])->name('superadminList.store');
                Route::delete('/delete/{id}', [SuperAdminController::class, 'deletesuperadminList'])->name('superadminList.delete');
            });
        });
    });
});
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function () {
    Route::prefix('couple')->group(function () {
        Route::get('/', [CoupleController::class, 'index'])->name('coupleGallery');
        Route::get('/create-image', [CoupleController::class, 'create'])->name('coupleGallery.create');
        Route::post('/create-image', [CoupleController::class, 'store'])->name('coupleGallery.store');
        Route::get('/create-massimage', [CoupleController::class, 'masscreate'])->name('coupleGallery.masscreate');
        Route::post('/create-massimage', [CoupleController::class, 'massstore'])->name('coupleGallery.massstore');
        Route::get('/update/{id}', [CoupleController::class, 'edit'])->name('coupleGallery.edit');
        Route::patch('/update/{id}', [CoupleController::class, 'update'])->name('coupleGallery.update');
        Route::delete('/destroy/{id}', [CoupleController::class, 'destroy'])->name('coupleGallery.destroy');
        Route::delete('/destroy-all', [CoupleController::class, 'destroyall'])->name('coupleGallery.destroyall');
        // Route::prefix('admin-list')->group(function () {
        //     Route::get('/', [SuperAdminController::class, 'adminList'])->name('adminList');
        //     Route::get('/edit/{id}', [SuperAdminController::class, 'editadminList'])->name('adminList.edit');
        //     Route::patch('/edit/{id}', [SuperAdminController::class, 'updateadminList'])->name('adminList.update');
        //     Route::get('/create', [SuperAdminController::class, 'createadminList'])->name('adminList.create');
        //     Route::post('/create', [SuperAdminController::class, 'createprocessadminList'])->name('adminList.store');
        //     Route::delete('/delete/{id}', [SuperAdminController::class, 'deleteadminList'])->name('adminList.delete');
        // });
        // Route::prefix('superadmin-list')->group(function () {
        //     Route::get('/', [SuperAdminController::class, 'superadminList'])->name('superadminList');
        //     Route::get('/edit/{id}',  [SuperAdminController::class, 'editsuperadminList'])->name('superadminList.edit');
        //     Route::patch('/edit/{id}',  [SuperAdminController::class, 'updatesuperadminList'])->name('superadminList.update');
        //     Route::get('/create', [SuperAdminController::class, 'createsuperadminList'])->name('superadminList.create');
        //     Route::post('/create', [SuperAdminController::class, 'createprocesssuperadminList'])->name('superadminList.store');
        //     Route::delete('/delete/{id}', [SuperAdminController::class, 'deletesuperadminList'])->name('superadminList.delete');
        // });
    });
    Route::prefix('family')->group(function () {
        Route::get('/', [FamilyController::class, 'index'])->name('familyGallery');
        Route::get('/create-image', [FamilyController::class, 'create'])->name('familyGallery.create');
        Route::post('/create-image', [FamilyController::class, 'store'])->name('familyGallery.store');
        Route::get('/create-massimage', [FamilyController::class, 'masscreate'])->name('familyGallery.masscreate');
        Route::post('/create-massimage', [FamilyController::class, 'massstore'])->name('familyGallery.massstore');
        Route::get('/update/{id}', [FamilyController::class, 'edit'])->name('familyGallery.edit');
        Route::patch('/update/{id}', [FamilyController::class, 'update'])->name('familyGallery.update');
        Route::delete('/destroy/{id}', [FamilyController::class, 'destroy'])->name('familyGallery.destroy');
        Route::delete('/destroy-all', [FamilyController::class, 'destroyall'])->name('familyGallery.destroyall');
        // Route::prefix('admin-list')->group(function () {
        //     Route::get('/', [SuperAdminController::class, 'adminList'])->name('adminList');
        //     Route::get('/edit/{id}', [SuperAdminController::class, 'editadminList'])->name('adminList.edit');
        //     Route::patch('/edit/{id}', [SuperAdminController::class, 'updateadminList'])->name('adminList.update');
        //     Route::get('/create', [SuperAdminController::class, 'createadminList'])->name('adminList.create');
        //     Route::post('/create', [SuperAdminController::class, 'createprocessadminList'])->name('adminList.store');
        //     Route::delete('/delete/{id}', [SuperAdminController::class, 'deleteadminList'])->name('adminList.delete');
        // });
        // Route::prefix('superadmin-list')->group(function () {
        //     Route::get('/', [SuperAdminController::class, 'superadminList'])->name('superadminList');
        //     Route::get('/edit/{id}',  [SuperAdminController::class, 'editsuperadminList'])->name('superadminList.edit');
        //     Route::patch('/edit/{id}',  [SuperAdminController::class, 'updatesuperadminList'])->name('superadminList.update');
        //     Route::get('/create', [SuperAdminController::class, 'createsuperadminList'])->name('superadminList.create');
        //     Route::post('/create', [SuperAdminController::class, 'createprocesssuperadminList'])->name('superadminList.store');
        //     Route::delete('/delete/{id}', [SuperAdminController::class, 'deletesuperadminList'])->name('superadminList.delete');
        // });
    });
    Route::prefix('baby')->group(function () {
        Route::get('/', [BabyController::class, 'index'])->name('babyGallery');
        Route::get('/create-image', [BabyController::class, 'create'])->name('babyGallery.create');
        Route::post('/create-image', [BabyController::class, 'store'])->name('babyGallery.store');
        Route::get('/create-massimage', [BabyController::class, 'masscreate'])->name('babyGallery.masscreate');
        Route::post('/create-massimage', [BabyController::class, 'massstore'])->name('babyGallery.massstore');
        Route::get('/update/{id}', [BabyController::class, 'edit'])->name('babyGallery.edit');
        Route::patch('/update/{id}', [BabyController::class, 'update'])->name('babyGallery.update');
        Route::delete('/destroy/{id}', [BabyController::class, 'destroy'])->name('babyGallery.destroy');
        Route::delete('/destroy-all', [BabyController::class, 'destroyall'])->name('babyGallery.destroyall');
        // Route::prefix('admin-list')->group(function () {
        //     Route::get('/', [SuperAdminController::class, 'adminList'])->name('adminList');
        //     Route::get('/edit/{id}', [SuperAdminController::class, 'editadminList'])->name('adminList.edit');
        //     Route::patch('/edit/{id}', [SuperAdminController::class, 'updateadminList'])->name('adminList.update');
        //     Route::get('/create', [SuperAdminController::class, 'createadminList'])->name('adminList.create');
        //     Route::post('/create', [SuperAdminController::class, 'createprocessadminList'])->name('adminList.store');
        //     Route::delete('/delete/{id}', [SuperAdminController::class, 'deleteadminList'])->name('adminList.delete');
        // });
        // Route::prefix('superadmin-list')->group(function () {
        //     Route::get('/', [SuperAdminController::class, 'superadminList'])->name('superadminList');
        //     Route::get('/edit/{id}',  [SuperAdminController::class, 'editsuperadminList'])->name('superadminList.edit');
        //     Route::patch('/edit/{id}',  [SuperAdminController::class, 'updatesuperadminList'])->name('superadminList.update');
        //     Route::get('/create', [SuperAdminController::class, 'createsuperadminList'])->name('superadminList.create');
        //     Route::post('/create', [SuperAdminController::class, 'createprocesssuperadminList'])->name('superadminList.store');
        //     Route::delete('/delete/{id}', [SuperAdminController::class, 'deletesuperadminList'])->name('superadminList.delete');
        // });
    });
    Route::prefix('event')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('eventGallery');
        Route::get('/create-image', [EventController::class, 'create'])->name('eventGallery.create');
        Route::post('/create-image', [EventController::class, 'store'])->name('eventGallery.store');
        Route::get('/create-massimage', [EventController::class, 'masscreate'])->name('eventGallery.masscreate');
        Route::post('/create-massimage', [EventController::class, 'massstore'])->name('eventGallery.massstore');
        Route::get('/update/{id}', [EventController::class, 'edit'])->name('eventGallery.edit');
        Route::patch('/update/{id}', [EventController::class, 'update'])->name('eventGallery.update');
        Route::delete('/destroy/{id}', [EventController::class, 'destroy'])->name('eventGallery.destroy');
        Route::delete('/destroy-all', [EventController::class, 'destroyall'])->name('eventGallery.destroyall');
        // Route::prefix('admin-list')->group(function () {
        //     Route::get('/', [SuperAdminController::class, 'adminList'])->name('adminList');
        //     Route::get('/edit/{id}', [SuperAdminController::class, 'editadminList'])->name('adminList.edit');
        //     Route::patch('/edit/{id}', [SuperAdminController::class, 'updateadminList'])->name('adminList.update');
        //     Route::get('/create', [SuperAdminController::class, 'createadminList'])->name('adminList.create');
        //     Route::post('/create', [SuperAdminController::class, 'createprocessadminList'])->name('adminList.store');
        //     Route::delete('/delete/{id}', [SuperAdminController::class, 'deleteadminList'])->name('adminList.delete');
        // });
        // Route::prefix('superadmin-list')->group(function () {
        //     Route::get('/', [SuperAdminController::class, 'superadminList'])->name('superadminList');
        //     Route::get('/edit/{id}',  [SuperAdminController::class, 'editsuperadminList'])->name('superadminList.edit');
        //     Route::patch('/edit/{id}',  [SuperAdminController::class, 'updatesuperadminList'])->name('superadminList.update');
        //     Route::get('/create', [SuperAdminController::class, 'createsuperadminList'])->name('superadminList.create');
        //     Route::post('/create', [SuperAdminController::class, 'createprocesssuperadminList'])->name('superadminList.store');
        //     Route::delete('/delete/{id}', [SuperAdminController::class, 'deletesuperadminList'])->name('superadminList.delete');
        // });
    });
});
