<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\PaymentConfigController;
use App\Http\Controllers\NotificationConfigController;

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

Route::get('/paymentConfig/get', [PaymentConfigController::class, 'GetPaymentControllerConfig']);
Route::post('/paymentConfig/set', [PaymentConfigController::class, 'SetPaymentControllerConfig']);

Route::get('/notificationConfig/get', [NotificationConfigController::class, 'GetNotificationConfig']);
Route::post('/notificationConfig/set', [NotificationConfigController::class, 'SetNotificationConfig']);
