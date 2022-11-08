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

Route::get('/callBackList',[\App\Http\Controllers\API\DesignController::class, 'callBackList']);
Route::post('/addCallBackList', [\App\Http\Controllers\API\DesignController::class, 'addCallBackList']);
Route::post('/editCallBackList', [\App\Http\Controllers\API\DesignController::class, 'editCallBackList']);
Route::delete('/deleteCallBackList', [\App\Http\Controllers\API\DesignController::class, 'deleteCallBackList']);

Route::get('/questionsList',[\App\Http\Controllers\API\DesignController::class, 'questionsList']);
Route::post('/addQuestionsList', [\App\Http\Controllers\API\DesignController::class, 'addQuestionsList']);
Route::post('/editQuestionsList', [\App\Http\Controllers\API\DesignController::class, 'editQuestionsList']);
Route::delete('/deleteQuestionsList', [\App\Http\Controllers\API\DesignController::class, 'deleteQuestionsList']);

Route::get('/serviceList',[\App\Http\Controllers\API\DesignController::class, 'serviceList']);
Route::post('/addServiceList', [\App\Http\Controllers\API\DesignController::class, 'addServiceList']);
Route::post('/editServiceList', [\App\Http\Controllers\API\DesignController::class, 'editServiceList']);
Route::delete('/deleteServiceList', [\App\Http\Controllers\API\DesignController::class, 'deleteServiceList']);

Route::get('/users',[\App\Http\Controllers\API\DesignController::class, 'users']);
Route::post('/addUsers', [\App\Http\Controllers\API\DesignController::class, 'addUsers']);
Route::post('/editUsers', [\App\Http\Controllers\API\DesignController::class, 'editUsers']);
Route::delete('/deleteUsers', [\App\Http\Controllers\API\DesignController::class, 'deleteUsers']);
