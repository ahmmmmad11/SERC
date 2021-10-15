<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ResultsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('schools', SchoolsController::class);
Route::apiResource('subjects', SubjectController::class);
Route::apiResource('teachers', TeachersController::class);
Route::apiResource('students', StudentsController::class);
Route::apiResource('levels', LevelsController::class);
Route::apiResource('results', ResultsController::class)->except(['show', 'delete']);
