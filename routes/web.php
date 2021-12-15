<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TraningController;
use App\Http\Controllers\CustomAuthController;

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


Route::group(['middleware' => ['auth']], function() {
    Route::get('/training', [TraningController::class, 'index'])->name('training');
    Route::post('/training/{id}', [TraningController::class, 'show'])->name('training_show');
    Route::get('/training/{id}', [TraningController::class, 'show'])->name('training_show');
    Route::post('/training/{id}', [TraningController::class, 'store'])->name('training_store');
    Route::get('/test', [TraningController::class, 'index2'])->name('test');
    Route::post('/test/{id}', [TraningController::class, 'show2'])->name('test_show');
    Route::get('/test/{id}', [TraningController::class, 'show2'])->name('test_show');
    Route::post('/test/{id}', [TraningController::class, 'store2'])->name('test_store');
    Route::get('/info', [TraningController::class, 'info'])->name('info');
});

Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/login', [CustomAuthController::class, 'customLogin'])->name('login');
Route::get('/', function () {
    return redirect(route('login'));
});
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
