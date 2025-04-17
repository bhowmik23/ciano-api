<?php

use App\Http\Controllers\BoardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boards', [BoardController::class, 'index']);
Route::get('/get-board/{id}', [BoardController::class, 'show']);
Route::get('/update-board/{id}', [BoardController::class, 'update']);
Route::get('/delete-board/{id}', [BoardController::class, 'destroy']);
