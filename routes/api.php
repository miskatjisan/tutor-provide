<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\LivingLocationController;
use App\Http\Controllers\TutionTypeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PreferableClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Auth::routes();

// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
// Route::post('/reset-password', [AuthController::class, 'resetPassword']);

Route::apiResource('divisions', DivisionController::class);
Route::apiResource('districts', DistrictController::class);
Route::apiResource('areas', AreaController::class);
Route::apiResource('living-locations', LivingLocationController::class);
Route::apiResource('tution_types', TutionTypeController::class);
Route::resource('categories', CategoryController::class)->only(['index','store','show','update','destroy']);
Route::apiResource('preferable_classes', PreferableClassController::class);
Route::apiResource('subjects', SubjectController::class);

Route::group(['middleware' => ['auth:api']], function() {
Route::apiResource('users', UserController::class);
Route::apiResource('roles', RoleController::class);
Route::apiResource('products', ProductController::class);
});