<?php

use App\Events\MyEvent;
use App\Http\Controllers\Dashboard\AmbulanceConroller;
use App\Http\Controllers\Dashboard\appointments\AppointmentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\InsuranceController;
use App\Http\Controllers\Dashboard\LaboratorieEmployeeController;
use App\Http\Controllers\Dashboard\PatientConroller;
use App\Http\Controllers\Dashboard\PaymentAccountController;
use App\Http\Controllers\Dashboard\RayEmployeeController;
use App\Http\Controllers\Dashboard\ReceiptAccountController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\SingleServiceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization as FacadesLaravelLocalization;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Livewire\CreateGroupServices;
use App\Models\Insurance;
use App\Models\ReceiptAccount;
use Livewire\Livewire;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
        
    ], function(){ 

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    ########################################## Dashboard User #####################################
    Route::get('/dashboard/user', function () {
        return view('dashboard.users.index');
    })->middleware(['auth', 'verified'])->name('dashboard.user');

    ########################################## End Dashboard User #####################################

   
    ########################################## Section Admin #####################################

    Route::middleware(['auth'])->group(function(){
        Route::resource('Sections' , SectionController::class);
    });
    
    ########################################## ENd Section Admin #####################################

    ########################################## Doctor Admin #####################################

    Route::middleware(['auth'])->group(function(){
        Route::resource('Doctors' , DoctorController::class);
        Route::post('update_password' , [DoctorController::class , 'update_password'])->name("update_password");
        Route::post('update_status' , [DoctorController::class , 'update_status'])->name("update_status"); 
    });
    
    ########################################## ENd Doctor Admin #####################################

    ########################################## Service Admin #####################################

    Route::middleware(['auth'])->group(function(){
        Route::resource('Service' , SingleServiceController::class);
    });    
    ########################################## ENd service Admin #####################################

    //############################# GroupServices route ##########################################
    Route::middleware(['auth'])->group(function(){
        Route::view('Add_GroupServices','livewire.GroupServices.include_create')->name('Add_GroupServices');
    });
    //############################# end GroupServices route ######################################

    //############################# insurance route ##########################################
    Route::middleware(['auth'])->group(function(){
        Route::resource('insurance' , InsuranceController::class);
    });
    //############################# end insurance route ######################################

    ########################################## Ambulance Admin #####################################

    Route::middleware(['auth'])->group(function(){
        Route::resource('Ambulance' , AmbulanceConroller::class);
    });    
    ########################################## ENd Ambulance Admin #####################################

    ########################################## Patient Admin #####################################

    Route::middleware(['auth'])->group(function(){
        Route::resource('Patients' , PatientConroller::class);
    });    
    ########################################## ENd Patient Admin #####################################
    
    
    //############################# Single Invioces route ##########################################
    Route::middleware(['auth'])->group(function(){
        Route::view('single_invoices','livewire.single_invoices.index')->name('single_invoices');
        Route::view('Print_single_invoices','livewire.single_invoices.print')->name('Print_single_invoices');
    });    
    //############################# end Single Invoices route ######################################
    
    ########################################## Receipt Admin #####################################

    Route::middleware(['auth'])->group(function(){
        Route::resource('Receipt' , ReceiptAccountController::class);
    });    
    ########################################## ENd Receipt Admin #####################################
    
    ########################################## Payment Account #####################################

    Route::middleware(['auth'])->group(function(){
        Route::resource('Payment' , PaymentAccountController::class);
    });    
    ########################################## ENd Payment Account #####################################
    
    //############################# group Invioces route ##########################################
    Route::middleware(['auth'])->group(function(){
        Route::view('group_invoices','livewire.group_invoices.index')->name('group_invoices');
        Route::view('Print_group_invoices','livewire.group_invoices.print')->name('Print_group_invoices');
    });    
    //############################# end group Invoices route ######################################

    //############################# RayEmployee route ##########################################
    Route::middleware(['auth'])->group(function(){
        Route::resource('ray_employee', RayEmployeeController::class);
    }); 
    //############################# end RayEmployee route ######################################

    //############################# laboratorie_employee route ##########################################
    Route::middleware(['auth'])->group(function(){
        Route::resource('laboratorie_employee', LaboratorieEmployeeController::class);
    }); 
    //############################# end laboratorie_employee route ######################################

    //############################# laboratorie_employee route ##########################################
    Route::middleware(['auth'])->group(function(){
        Route::get('appointments',[AppointmentController::class,'index'])->name('appointments.index');
        Route::put('appointments/approval/{id}',[AppointmentController::class,'approval'])->name('appointments.approval');
        Route::get('appointments/approval',[AppointmentController::class,'index2'])->name('appointments.index2');
    }); 
    //############################# end laboratorie_employee route ######################################
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    

    require __DIR__.'/auth.php';
});




