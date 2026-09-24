<?php
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project/create', [ProjectController::class, 'create']);
Route::get('/project/{id}', [ProjectController::class, 'show']);
Route::post('/project', [ProjectController::class, 'store']);