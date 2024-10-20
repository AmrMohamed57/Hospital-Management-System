<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\DoctorController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\LabEmployeeController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\PatientController;
use App\Http\Controllers\Auth\RayEmployeeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

################## Route User ##################
    
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('user/login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.user');
    
##################################################

################# Route Doctor ###################
    
    Route::post('/login/doctor', [DoctorController::class, 'store'])->middleware('guest')->name('login.doctor');

###################################################

################### Route Ray Employee ############

    Route::post('/login/ray_employee', [RayEmployeeController::class, 'store'])->middleware('guest')->name('login.ray_employee');
   
################ End Route Ray Employee ###########

################### Route Ray Employee ############

Route::post('/login/lab_employee', [LabEmployeeController::class, 'store'])->middleware('guest')->name('login.lab_employee');

################ End Route Ray Employee ###########

################### Route Patient Employee ############

Route::post('/login/patient', [PatientController::class, 'store'])->middleware('guest')->name('login.patient');

################ End Route Patient Employee ###########


Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

################# Route Doctor ##################

Route::middleware(['auth:doctor'])->group(function () {
    Route::post('/logout/doctor', [DoctorController::class, 'destroy'])->name('logout.doctor');
});

################ End Route Doctor ################

################### Route Ray Employee ###########

Route::middleware(['auth:ray_employee'])->group(function () {
    Route::post('/logout/ray_employee', [RayEmployeeController::class, 'destroy'])->name('logout.ray_employee');
});

################ End Route Ray Employee ###########

################### Route Lab Employee ###########

Route::middleware(['auth:lab_employee'])->group(function () {
    Route::post('/logout/lab_employee', [LabEmployeeController::class, 'destroy'])->name('logout.lab_employee');
});

################ End Route Lab Employee ###########

################### Route Patient Employee ###########

Route::middleware(['auth:patient'])->group(function () {
    Route::post('/logout/patient', [PatientController::class, 'destroy'])->name('logout.patient');
});

################ End Route Patient Employee ###########











################### Route User ####################

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

################### End Route User ###################

