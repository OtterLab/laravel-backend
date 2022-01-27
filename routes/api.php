<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\CreateAuthController;
use App\Http\Controllers\Auth\GetAuthUserController;
use App\Http\Controllers\Auth\UpdateAuthController;
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

use App\Http\Controllers\RoomType\CreateRoomTypeController;
use App\Http\Controllers\RoomType\UpdateRoomTypeController;
use App\Http\Controllers\RoomType\DeleteRoomTypeController;
use App\Http\Controllers\RoomType\ShowAllRoomTypeController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
