<?php

use Illuminate\Http\Request;
USE App\Http\Controllers\BookController;
USE App\Http\Controllers\VehiculeController;
USE App\Http\Controllers\AgenceController;
USE App\Http\Controllers\AgentController;


Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});


Route::get('agences', [AgenceController::class,'index']);
Route::group(['prefix' => 'agence'], function () {
    Route::post('add', [AgenceController::class,'add']);
    Route::get('edit/{id}', [AgenceController::class,'edit']);
    Route::post('update/{id}', [AgenceController::class,'update']);
    Route::delete('delete/{id}', [AgenceController::class,'delete']);
});

Route::get('agents', [AgentController::class,'index']);
Route::group(['prefix' => 'agent'], function () {
    Route::post('add', [AgentController::class,'add']);
    Route::get('edit/{id}', [AgentController::class,'edit']);
    Route::post('update/{id}', [AgentController::class,'update']);
    Route::delete('delete/{id}', [AgentController::class,'delete']);
});

Route::get('vehicules', [VehiculeController::class,'index']);
Route::group(['prefix' => 'vehicule'], function () {
    Route::post('add', [VehiculeController::class,'add']);
    Route::get('edit/{id}', [VehiculeController::class,'edit']);
    Route::post('update/{id}', [VehiculeController::class,'update']);
    Route::delete('delete/{vehicule_ID}', [VehiculeController::class,'delete']);
});



Route::get('books', [BookController::class,'index']);
Route::group(['prefix' => 'book'], function () {
    Route::post('add', [BookController::class,'add']);
    Route::get('edit/{id}', [BookController::class,'edit']);
    Route::post('update/{id}', [BookController::class,'update']);
    Route::delete('delete/{id}', [BookController::class,'delete']);
});