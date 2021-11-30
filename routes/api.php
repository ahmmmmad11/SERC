<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\SchoolsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\ExchangesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\UsersController;

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

Route::resource('states', StatesController::class)->only('index');
Route::apiResource('schools', SchoolsController::class)->except('show');
Route::apiResource('subjects', SubjectController::class)->except('show');
Route::apiResource('teachers', TeachersController::class)->except('show');
Route::apiResource('students', StudentsController::class)->except('show');
Route::apiResource('levels', LevelsController::class)->except('show');
Route::apiResource('results', ResultsController::class)->except(['show', 'delete']);
Route::apiResource('exchanges', ExchangesController::class)->except('show');

Route::apiResource('users', UsersController::class)->except(['show']);
Route::apiResource('profile', ProfileController::class)->only(['show', 'update']);

Route::post('update-password', [ProfileController::class, 'updatePassword']);
Route::post('login', [LoginController::class, 'login']);
