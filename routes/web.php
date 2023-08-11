<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\NewcomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'redirectToStatusPage'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/manager/task', [TaskController::class, 'index'])->name('task');
Route::get('/manager/tasks/create', [TaskController::class, 'create']);
Route::post('/manager/tasks', [TaskController::class, 'store']);
Route::get('/manager/tasks/{task}', [TaskController::class ,'show']);
Route::get('/manager/tasks/{task}/edit', [TaskController::class, 'edit']);
Route::put('/manager/tasks/{task}', [TaskController::class, 'update']);
Route::delete('/manager/tasks/{task}', [TaskController::class,'delete']);

Route::get('/manager/trainer', [TrainerController::class, 'index'])->name('manager/trainer');
Route::get('/manager/trainers/create', [TrainerController::class, 'create']);
Route::post('/manager/trainers', [TrainerController::class, 'store']);
Route::get('/manager/trainers/{trainer}', [TrainerController::class ,'show']);
Route::get('/manager/trainers/{trainer}/edit', [TrainerController::class, 'edit']);
Route::put('/manager/trainers/{trainer}', [TrainerController::class, 'update']);
Route::delete('/manager/trainers/{trainer}', [TrainerController::class,'delete']);

Route::get('/manager/newcomer', [NewcomerController::class, 'index'])->name('manager/newcomer');
Route::get('/manager/newcomers/create', [NewcomerController::class, 'create']);
Route::post('/manager/newcomers', [NewcomerController::class, 'store']);
Route::get('/manager/newcomers/{newcomer}', [NewcomerController::class ,'show']);
Route::get('/manager/newcomers/{newcomer}/edit', [NewcomerController::class, 'edit']);
Route::put('/manager/newcomers/{newcomer}', [NewcomerController::class, 'update']);