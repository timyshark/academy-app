<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [UserController::class,'register']);
    Route::post('login', [UserController::class,'authenticate']);
    Route::get('open', [DataController::class,'open']);

    Route::group(['middleware' => ['jwt.verify']], function() {
        Route::get('user', [UserController::class,'getAuthenticatedUser']);
        Route::get('closed', [DataController::class,'closed']);

    });

    Route::prefix('users')->group(function () {
        Route::get('', [UserController::class,'index']);
        Route::get('{id}', [UserController::class,'show']);
        Route::post('', [UserController::class,'store']);
        Route::put('{id}', [UserController::class,'show']);
        Route::delete('{id}', [UserController::class,'delete']);

        Route::get('level2', function () {
            // Matches The "/admin/users" URL
        });
    });    
    
    
    Route::prefix('students')->group(function () {
        Route::get('', [StudentController::class,'index']);
        Route::get('{id}', [StudentController::class,'show']);
        Route::post('', [StudentController::class,'store']);
        Route::put('{id}', [StudentController::class,'show']);
        Route::delete('{id}', [StudentController::class,'delete']);

        Route::get('level2', function () {
            // Matches The "/admin/users" URL
        });
    });
    Route::prefix('schools')->group(function () {
        Route::get('', [SchoolController::class,'index']);
        Route::get('{id}', [SchoolController::class,'show']);
        Route::post('', [SchoolController::class,'store']);
        Route::put('{id}', [SchoolController::class,'show']);
        Route::delete('{id}', [SchoolController::class,'delete']);

        Route::get('level2', function () {
            // Matches The "/admin/users" URL
        });
    });

    


// http://localhost:8000/api/users
    
