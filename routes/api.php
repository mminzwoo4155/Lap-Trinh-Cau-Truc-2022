<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\ScreenConfigController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/user/get-role/from-id', [UserRoleController::class, 'GetUserRoleFromID']);
Route::post('/user/set-role/for-id', [UserRoleController::class, 'StoreUserRole']);

Route::get('/user/get-screen-config/from-id', [ScreenConfigController::class, 'GetScreenConfigFromID']);
Route::post('/user/set-screen-config/for-id', [ScreenConfigController::class, 'StoreScreenConfig']);

