<?php

use App\Http\Controllers\DashboardPatient\PatientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
        
    ], function(){ 



    ########################################## Dashboard doctor #####################################

    Route::middleware(['auth:patient'])->group(function () {
        Route::get('/dashboard/patient', function () {
            return view('dashboard.dashboard_patient.index');
        })->name('dashboard.patient');
    });
    
  
    Route::middleware(["auth:patient"])->group(function(){

        Route::prefix('patient')->group(function(){
    
            //############################# patients route ##########################################
            
            Route::get('invoices', [PatientController::class,'invoices'])->name('invoices.patient');

            Route::get('laboratories', [PatientController::class,'laboratories'])->name('laboratories.patient');
            
            Route::get('view_laboratories/{id}', [PatientController::class,'viewLaboratories'])->name('laboratories.view');
            
            Route::get('rays', [PatientController::class,'rays'])->name('rays.patient');
            
            Route::get('view_rays/{id}', [PatientController::class,'viewRays'])->name('rays.view');
            
            Route::get('payments', [PatientController::class,'payments'])->name('payments.patient');
            
            //############################# end patients route ######################################

            //############################# 404 route ##########################################
            Route::get('404', function () {
                return view('dashboard.404');
            })->name("404");
            //############################# End 404 route ##########################################
        });
    });

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});


