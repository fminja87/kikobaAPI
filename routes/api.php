<?php

use App\Http\Controllers\API\AuthenticationApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [AuthenticationApiController::class, 'logout']);
});

//API route for register new user
Route::post('/register', [AuthenticationApiController::class, 'register']);
//API route for login user
Route::post('/login', [AuthenticationApiController::class, 'login']);
