<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here resides register web routes for the application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

Route::delete('/tasks/{targetTask}', [TasksController::class, 'Destroy']);

Route::post('/tasks/{targetTask}', [TasksController::class, 'Update']);
Route::get('/tasks/{targetTask}', [TasksController::class, 'Edit']);

Route::post('/create', [TasksController::class, 'Store']);
Route::get('/create', [TasksController::class, 'Create']);

Route::get('/', [TasksController::class, 'List']);
