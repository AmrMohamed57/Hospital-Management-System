<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard_Doctor\DiagnosticController;
use App\Http\Controllers\Dashboard_Doctor\LaboratorieController;
use App\Http\Controllers\Dashboard_Doctor\RayController;
use App\Http\Controllers\Dashboard_Doctor\PatientDetailsController;
use App\Http\Controllers\Dashboard_Ray_Employee\InvoiceController;
use App\Http\Controllers\LabEmployee\LabEmployeeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| doctor Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {


    //################################ dashboard doctor ########################################

    Route::get('/dashboard/lab_employee', function () {
        return view('dashboard.dashboard_LaboratorieEmployee.dashboard');
    })->middleware(['auth:lab_employee'])->name('dashboard.lab_employee');

    //################################ end dashboard doctor #####################################

    Route::middleware(["auth:lab_employee"])->group(function(){

        Route::prefix('lab_employee')->group(function(){
           
        //############################# invoices route ##########################################

        Route::resource('labDisclosure', LabEmployeeController::class);

        Route::get('disclosure/{id}', [LabEmployeeController::class, 'index'])->name('labDisclosures');
        
        //############################# end invoices route ######################################
        































        
        
        
        
    });

});

require __DIR__.'/auth.php';
});