<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\App\Http\Controllers\AdminController;
use Modules\Admin\App\Http\Controllers\ClassController;
use Modules\Admin\App\Http\Controllers\StudentController;

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

Route::group([], function () {
    Route::prefix('admin')->group(function () {
        Route::group('class', function () {
            Route::get('/', [ClassController::class, 'index'])->name('class.index');
            Route::get('/create', [ClassController::class, 'create'])->name('class.create');
            Route::post('/create', [ClassController::class, 'store']);
            Route::get('/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
            Route::post('/edit/{id}', [ClassController::class, 'update']);
            Route::get('/delete/{id}', [ClassController::class, 'destroy'])->name('class.delete');
        });
        Route::group('student', function () {
            Route::get('/', [StudentController::class, 'index'])->name('student.index');
            Route::get('/create', [StudentController::class, 'create'])->name('student.create');
            Route::post('/create', [StudentController::class, 'store']);
            Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
            Route::post('/edit/{id}', [StudentController::class, 'update']);
            Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');
        });
    });
});
