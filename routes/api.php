<?php

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
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::get('/projects',[\App\Http\Controllers\API\DesignController::class, 'all']);
Route::post('/addProject', [\App\Http\Controllers\API\DesignController::class, 'addProject']);
Route::post('/editProject', [\App\Http\Controllers\API\DesignController::class, 'editProject']);
Route::delete('/deleteProject', [\App\Http\Controllers\API\DesignController::class, 'deleteProject']);
