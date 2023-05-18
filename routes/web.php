<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CV;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\WorkerController;


Route::get('/', function () {
    return 'welcome';
});
Route::get('/Molchanov/cv', [CV::class, 'resume']);

Route::get('/workers', [WorkerController::class, 'index']);
Route::get('/workers/create', [WorkerController::class, 'create']);
Route::get('/workers/update', [WorkerController::class, 'update']);
Route::get('/workers/delete', [WorkerController::class, 'delete']);

Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/departments/create', [DepartmentController::class, 'create']);
Route::get('/departments/update', [DepartmentController::class, 'update']);
Route::get('/departments/delete', [DepartmentController::class, 'delete']);


