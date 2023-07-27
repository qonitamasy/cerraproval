<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/icon', [PageController::class, 'icon'])->name('icon');
Route::get('/sample-page', [PageController::class, 'sample'])->name('sample');
Route::get('/ui-alerts', [PageController::class, 'alerts'])->name('alerts');
Route::get('/ui-buttons', [PageController::class, 'buttons'])->name('buttons');
Route::get('/ui-cards', [PageController::class, 'cards'])->name('cards');
Route::get('/ui-forms', [PageController::class, 'forms'])->name('forms');
Route::get('/ui-typography', [PageController::class, 'typography'])->name('typography');
