<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/design-page', [\App\Http\Controllers\DesignController::class, 'index'])->name('design-page');
Route::get('/services', [\App\Http\Controllers\DesignController::class, 'servicesP'])->name('servicesP');
Route::get('/ourProducts', [\App\Http\Controllers\DesignController::class, 'ourProductsP'])->name('ourProductsP');
Route::get('/contacts', [\App\Http\Controllers\DesignController::class, 'contactsP'])->name('contactsP');
Route::get('/callbackP', [\App\Http\Controllers\DesignController::class, 'callbackP'])->name('callbackP');
Route::get('/fillQuestionFormP', [\App\Http\Controllers\DesignController::class, 'fillQuestionFormP'])->name('fillQuestionFormP');

Route::get('/authorization-page', [\App\Http\Controllers\DesignController::class, 'authorizeP'])->name('authorizeP');
Route::get('/registration-page', [\App\Http\Controllers\DesignController::class, 'registrationP'])->name('registrationP');

Route::post('user/create', [\App\Http\Controllers\AuthController::class, 'create'])->name('user.create');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/addPage', [\App\Http\Controllers\DesignController::class, 'addP'])->name('addPage');
Route::get('/editP/{project}', [\App\Http\Controllers\DesignController::class, 'editP'])->name('editP');
Route::get('{project}/projectP', [\App\Http\Controllers\DesignController::class, 'projectP'])->name('projectP');

Route::post('/add', [\App\Http\Controllers\DesignController::class, 'add'])->name('add');
Route::post('/edit/{project}', [\App\Http\Controllers\DesignController::class, 'edit'])->name('edit');
Route::get('/delete/{project}', [\App\Http\Controllers\DesignController::class, 'delete'])->name('delete');

//Route::get('/orderProjectP/{project}', [\App\Http\Controllers\DesignController::class, 'ourProductsP'])->name('orderProjectP');

Route::get('/questionListP', [\App\Http\Controllers\DesignController::class, 'questionListP'])->name('questionListP');
Route::get('/addQuestionP', [\App\Http\Controllers\DesignController::class, 'addQuestionP'])->name('addQuestionP');
Route::get('/editQuestionP/{questionsList}', [\App\Http\Controllers\DesignController::class, 'editQuestionP'])->name('editQuestionP');

Route::post('/addQuestion', [\App\Http\Controllers\DesignController::class, 'addQuestion'])->name('addQuestion');
Route::post('/editQuestion/{questionsList}', [\App\Http\Controllers\DesignController::class, 'editQuestion'])->name('editQuestion');
Route::get('/deleteQuestion/{question}', [\App\Http\Controllers\DesignController::class, 'deleteQuestion'])->name('deleteQuestion');

//Route::get('/ListP', [\App\Http\Controllers\DesignController::class, 'questionListP'])->name('questionListP');
Route::get('/addServiceP', [\App\Http\Controllers\DesignController::class, 'addServiceP'])->name('addServiceP');
Route::get('/editServiceP/{service}', [\App\Http\Controllers\DesignController::class, 'editServiceP'])->name('editServiceP');

Route::post('/addService', [\App\Http\Controllers\DesignController::class, 'addService'])->name('addService');
Route::post('/editService/{service}', [\App\Http\Controllers\DesignController::class, 'editService'])->name('editService');
Route::get('/deleteService/{service}', [\App\Http\Controllers\DesignController::class, 'deleteService'])->name('deleteService');

Route::post('/addCallback', [\App\Http\Controllers\DesignController::class, 'addCallback'])->name('addCallback');
Route::post('/addFillQuestionForm', [\App\Http\Controllers\DesignController::class, 'addFillQuestionForm'])->name('addFillQuestionForm');

Route::get('/callbackPSuccess', [\App\Http\Controllers\DesignController::class, 'callbackPSuccess'])->name('callbackPSuccess');
