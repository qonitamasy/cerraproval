<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ApplicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// BERANDA
Route::prefix('/admin')->namespace('app\Http\Controllers\Admin')->group(function(){
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login']);
    Route::group(['middleware'=>['admin']], function(){
        Route::get('dashboard', [AdminController::class, 'dashboard']);
        Route::get('/application', [AdminController::class, 'application'])->name('ApplicationTable');

        // application
        Route::get('application-create', [ApplicationController::class, 'create'])->name('createApplication');
        Route::post('application-store', [ApplicationController::class, 'store'])->name('storeApplication');

        Route::delete('/application-{id}', [ApplicationController::class, 'destroy'])->name('destroyApplication');

        Route::get('application-{id}', [ApplicationController::class, 'edit'])->name('editApplication');
        Route::put('application-{id}', [ApplicationController::class, 'update'])->name('updateApplication');
    });
});
