<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticarController;

Route::post('registro', [AutenticarController::class,'registro']);

Route::post('acceso', [AutenticarController::class,'acceso']);


Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('cerrarsesion', [AutenticarController::class,'cerrarSesion']);
    Route::get('users', [AutenticarController::class,'index']);
});

