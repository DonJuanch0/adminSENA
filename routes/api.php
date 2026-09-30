<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenticesController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TeacherController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/apprentices', [ApprenticesController::class, 'index'])->name('api.v1.apprentices.index');
Route::get('/apprentices/{apprentice}', [ApprenticesController::class, 'show'])->name('api.v1.apprentices.show');
Route::post('/apprentices', [ApprenticesController::class, 'store'])->name('api.v1.apprentices.store');
Route::put('/apprentices/{apprentice}', [ApprenticesController::class, 'update'])->name('api.v1.apprentices.update');
Route::delete('/apprentices/{apprentice}', [ApprenticesController::class, 'destroy'])->name('api.v1.apprentices.destroy');

Route::get('/areas', [AreaController::class, 'index'])->name('api.v1.areas.index');
Route::get('/areas/{area}', [AreaController::class, 'show'])->name('api.v1.areas.show');
Route::post('/areas', [AreaController::class, 'store'])->name('api.v1.areas.store');
Route::put('/areas/{area}', [AreaController::class, 'update'])->name('api.v1.areas.update');
Route::delete('/areas/{area}', [AreaController::class, 'destroy'])->name('api.v1.areas.destroy');

Route::get('/computers', [ComputersController::class, 'index'])->name('api.v1.computers.index');
Route::get('/computers/{computer}', [ComputersController::class, 'show'])->name('api.v1.computers.show');
Route::post('/computers', [ComputersController::class, 'store'])->name('api.v1.computers.store');
Route::put('/computers/{computer}', [ComputersController::class, 'update'])->name('api.v1.computers.update');
Route::delete('/computers/{computer}', [ComputersController::class, 'destroy'])->name('api.v1.computers.destroy');

Route::get('/courses', [CoursesController::class, 'index'])->name('api.v1.courses.index');
Route::get('/courses/{course}', [CoursesController::class, 'show'])->name('api.v1.courses.show');
Route::post('/courses', [CoursesController::class, 'store'])->name('api.v1.courses.store');
Route::put('/courses/{course}', [CoursesController::class, 'update'])->name('api.v1.courses.update');
Route::delete('/courses/{course}', [CoursesController::class, 'destroy'])->name('api.v1.courses.destroy');

Route::get('/trainingcenters', [TrainingCenterController::class, 'index'])->name('api.v1.trainingcenters.index');
Route::get('/trainingcenters/{trainingCenter}', [TrainingCenterController::class, 'show'])->name('api.v1.trainingcenters.show');
Route::post('/trainingcenters', [TrainingCenterController::class, 'store'])->name('api.v1.trainingcenters.store');
Route::put('/trainingcenters/{trainingCenter}', [TrainingCenterController::class, 'update'])->name('api.v1.trainingcenters.update');
Route::delete('/trainingcenters/{trainingCenter}', [TrainingCenterController::class, 'destroy'])->name('api.v1.trainingcenters.destroy');

Route::get('/teachers', [TeacherController::class, 'index'])->name('api.v1.teachers.index');
Route::get('/teachers/{teacher}', [TeacherController::class, 'show'])->name('api.v1.teachers.show');
Route::post('/teachers', [TeacherController::class, 'store'])->name('api.v1.teachers.store');
Route::put('/teachers/{teacher}', [TeacherController::class, 'update'])->name('api.v1.teachers.update');
Route::delete('/teachers/{teacher}', [TeacherController::class, 'destroy'])->name('api.v1.teachers.destroy');