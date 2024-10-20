<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RayEmployee\DisclosureController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization as FacadesLaravelLocalization;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
        
    ], function(){ 


    //################################ dashboard ray employee ########################################

    Route::get('/dashboard/ray_employee', function () {
        return view('dashboard.dashboard_RayEmployee.dashboard');
    })->middleware(['auth:ray_employee'])->name('dashboard.ray_employee');

    Route::middleware(["auth:ray_employee"])->group(function(){

        Route::prefix('ray_employee')->group(function(){
           
        //############################# invoices route ##########################################

        // Route::get('disclosures/{id}', [DisclosureController::class, 'index'])->name('disclosure.index');
        Route::resource('disclosures' , DisclosureController::class);

        Route::get('disclosure/{id}', [DisclosureController::class, 'index'])->name('disclosure');
        
        //############################# end invoices route ######################################
        
        
        
        
        
        });
    });



    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});


