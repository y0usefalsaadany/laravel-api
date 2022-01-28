<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;
use App\Http\Middleware\VerifyCsrfToken;

Route::prefix('/students')->group(function () {
    Route::get('/{id}',[ studentsController::class,'get']);
    Route::post('/',[ studentsController::class,'post']);
    Route::put('/{id}',[ studentsController::class,'update']);
    Route::delete('/{id}',[ studentsController::class,'delete']);
});