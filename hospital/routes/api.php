<?php

use App\Http\Controllers\Api\DoctorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/' , function(){
//     return 2;
// });

Route::middleware('auth:sanctum')->group(function () {
    Route::get('doctors', [DoctorController::class, 'index']);
    Route::get('doctors/{id}', [DoctorController::class, 'show']);
});
