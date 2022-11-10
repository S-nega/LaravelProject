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

Route::get('/callBackList',[\App\Http\Controllers\API\CallBackListController::class, 'callBackList']);
Route::post('/addCallBackList', [\App\Http\Controllers\API\CallBackListController::class, 'addCallBackList']);
Route::post('/editCallBackList', [\App\Http\Controllers\API\CallBackListController::class, 'editCallBackList']);
Route::delete('/deleteCallBackList', [\App\Http\Controllers\API\CallBackListController::class, 'deleteCallBackList']);

Route::get('/questionsList',[\App\Http\Controllers\API\QuestionsListController::class, 'questionsList']);
Route::post('/addQuestionsList', [\App\Http\Controllers\API\QuestionsListController::class, 'addQuestionsList']);
Route::post('/editQuestionsList', [\App\Http\Controllers\API\QuestionsListController::class, 'editQuestionsList']);
Route::delete('/deleteQuestionsList', [\App\Http\Controllers\API\QuestionsListController::class, 'deleteQuestionsList']);

Route::get('/serviceList',[\App\Http\Controllers\API\ServiceListController::class, 'serviceList']);
Route::post('/addServiceList', [\App\Http\Controllers\API\ServiceListController::class, 'addServiceList']);
Route::post('/editServiceList', [\App\Http\Controllers\API\ServiceListController::class, 'editServiceList']);
Route::delete('/deleteServiceList', [\App\Http\Controllers\API\ServiceListController::class, 'deleteServiceList']);

Route::get('/users',[\App\Http\Controllers\API\UserController::class, 'users']);
Route::post('/addUsers', [\App\Http\Controllers\API\UserController::class, 'addUsers']);
Route::post('/editUsers', [\App\Http\Controllers\API\UserController::class, 'editUsers']);
Route::delete('/deleteUsers', [\App\Http\Controllers\API\UserController::class, 'deleteUsers']);
