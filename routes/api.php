<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\CreateAuthController;
use App\Http\Controllers\Auth\GetAuthController;
use App\Http\Controllers\Auth\UpdateUserController;
use App\Http\Controllers\Auth\DeleteUserController;
use App\Http\Controllers\Auth\ShowAllUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\Room\CreateRoomController;
use App\Http\Controllers\Room\UpdateRoomController;
use App\Http\Controllers\Room\DeleteRoomController;
use App\Http\Controllers\Room\ShowAllRoomController;

use App\Http\Controllers\Booking\CreateBookingController;
use App\Http\Controllers\Booking\UpdateBookingController;
use App\Http\Controllers\Booking\DeleteBookingController;
use App\Http\Controllers\Booking\ShowAllBookingController;

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

Route::group(['prefix' => 'auth'], function() {
    Route::post('register', [CreateAuthController::class, 'register']);
    Route::post('login', [LoginController::class, 'login']);
    Route::get('showAllUsers', [ShowAllUserController::class, 'showAllUsers']);
    Route::get('getUser/{id}', [UpdateUserController::class, 'getUser/{id}']);
    Route::post('updateUser/{id}', [UpdateUserController::class, 'updateUser']);
    Route::delete('deleteUser/{id}', [DeleteUserController::class, 'deleteUser/{id}']);

    Route::group(['middleware' => 'auth:sanctum'], function() {
        Route::get('logout', [LogoutController::class, 'logout']);
        Route::get('getAuthUser', [GetAuthController::class, 'getAuthUser']);
    });
});

Route::group(['prefix' => 'room'], function() {
    Route::post('createRoom', [CreateRoomController::class, 'createRoom']);
    Route::get('showAllRooms', [ShowAllRoomController::class, 'showAllRooms']);
    Route::get('getRoom/{id}', [UpdateRoomController::class, 'getRoom']);
    Route::post('updateRoom/{id}', [UpdateRoomController::class, 'updateRoom']);
    Route::delete('deleteRoom/{id}', [DeleteRoomController::class, 'deleteRoom/{id}']);
});

Route::group(['prefix' => 'booking'], function() {
    Route::post('createBooking', [CreateBookingController::class, 'createBooking']);
    Route::get('showAllBookings', [ShowAllBookingController::class, 'showAllBookings']);
    Route::get('getBooking/{id}', [UpdateBookingController::class, 'getBooking']);
    Route::post('updateBooking/{id}', [UpdateBookingController::class, 'updateBooking']);
    Route::delete('deleteBooking/{id}', [DeleteBookingController::class, 'deleteBooking/{id}']);
});