<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login',[AuthController::class,'login']);
Route::post('/authenticate',[AuthController::class,'authenticate']);

