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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/applyLeaveForm', [App\Http\Controllers\HomeController::class, 'requestLeaveForm'])->name('applyLeaveForm');
Route::post('/student', [App\Http\Controllers\StudentController::class, 'submit'])->name('applyLeaveForm');
Route::get('/fillLeaveForm/{studentId}', [App\Http\Controllers\HomeController::class, 'fillLeaveForm'])->name('fillLeaveForm');
Route::get('/printLeaveForm/{formId}', [App\Http\Controllers\HomeController::class, 'printLeaveForm'])->name('printLeaveForm');
Route::get('/appliedLeaveList', [App\Http\Controllers\HomeController::class, 'appliedLeaveList'])->name('getLeaveForm');
Route::get('/getReport/{studentId}', [App\Http\Controllers\HomeController::class, 'getReport'])->name('getReport');
Route::get('/createStudent/{studentId}', [App\Http\Controllers\StudentController::class, 'createStudent'])->name('createStudent');
Route::get('/createStudent', [App\Http\Controllers\StudentController::class, 'createStudent'])->name('createStudent');
Route::get('/editLeaveForm', [App\Http\Controllers\StudentController::class, 'editLeaveForm'])->name('editLeaveForm');
// Route::get('/printLeaveForm/{formId}', function (Request $request, $formId) {
//     return 'FormId '.$formId;
// });
