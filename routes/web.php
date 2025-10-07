<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpdController;
use App\Http\Controllers\opdhandwristController;
use App\Http\Controllers\OpdkneeController;
use App\Http\Controllers\OpdShoulderElbowController;
use App\Http\Controllers\OpdSpineController;
use App\Http\Controllers\opdspinedeformitycontroller;
use Illuminate\Contracts\Cache\Store;

Route::middleware(['set.active.nav'])->group(function () {

    // Routes handled by OpdController
     
Route::controller(OpdController::class)->group(function () {
        
    Route::get('/', 'registeredlist')->name('home');

    Route::get('/doctpanel/opd_pages.indexopd', 'registeredlist')->name('index');

    Route::get('reception/reglist', 'registeredlist')->name('reception.reglist');

    Route::get('/doctpanel/opd_oldnew/{regno}', 'opdOldNewData')->name('opd.regno');

    });
        
    });
    Route::post('/save-knee-details', [OpdkneeController::class, 'store'])->name('save.knee.details');
    Route::post('/save-spine-details', [OpdSpineController::class, 'store'])->name('save.spine.details');
    Route::post('/save-shoulder-elbow-details', [OpdShoulderElbowController::class, 'store'])->name('save.shoulder.elbow.details');
    Route::post('/save-spinedeformity-details', [opdspinedeformitycontroller::class, 'store'])->name('save.spinedeformity.details');
    Route::get('/opd/{id}/report', [OpdController::class, 'show']);
    Route::get('/report/{regno}', [OpdController::class, 'report'])->name('report.show');
    Route::post('/save-handwrist-details', [opdhandwristController::class, 'store'])->name('save.handwrist.details');

    Route::get('/dummy',function()
    {
     return view('/doctpanel/spine_pages/dummy_spine');
    });




?>