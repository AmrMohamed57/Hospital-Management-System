<?php

use App\Events\MyEvent;
use App\Http\Controllers\Doctor\DiagnosticController;
use App\Http\Controllers\Doctor\InvoiceController;
use App\Http\Controllers\Doctor\LaboratorieController;
use App\Http\Controllers\Doctor\PatientDetailsController;
use App\Http\Controllers\Doctor\RayController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization as FacadesLaravelLocalization;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
        
    ], function(){ 



    ########################################## Dashboard doctor #####################################

    Route::middleware(['auth:doctor'])->group(function () {
        // event(new MyEvent('How are you, doctor'));
        Route::get('/dashboard/doctor', function () {
            return view('dashboard.doctor.index');
        })->name('dashboard.doctor');
    });
    
  
    Route::middleware(["auth:doctor"])->group(function(){

        Route::prefix('doctor')->group(function(){
           
            ########################################## Invoice #####################################

            Route::get('invoices/{id}', [InvoiceController::class, 'index'])->name('Invoices.index');
            
            ########################################## End Invoice #################################
        
            ########################################## Diagnostic #####################################

            Route::resource('Diagnostics' , DiagnosticController::class); 
            
            ########################################## End Diagnostic #################################
        
            //############################# review_invoices route ##########################################
            Route::post('add_review', [DiagnosticController::class,'addReview'])->name('add_review');
            //############################# end invoices route #############################################
        
            //############################# rays route ##########################################

            Route::resource('rays', RayController::class);

            Route::resource('Laboratories', LaboratorieController::class);

            Route::get('patient_details/{id}', [PatientDetailsController::class,'index'])->name('patient_details');
            Route::get('view/{id}', [InvoiceController::class,'show'])->name('view_rays');
            Route::get('view_labs/{id}', [InvoiceController::class,'showLabs'])->name('view_labs');

            //############################# end rays route ######################################
            
            
            
            
            
            
            
                        
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
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


