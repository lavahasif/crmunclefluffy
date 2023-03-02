<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Login;
use App\Http\Controllers\NewLeadController;
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

Route::get('/', [Login::class, 'Index']);
Route::get('/Login', [Login::class, 'login'])->name('login');

Route::group(['prefix' => 'admin'], function () {
    // Routes that require authentication
    Route::group(['middleware' => 'admin'], function () {
        // Only authenticated users may enter...
        Route::get('/dashboard', [AdminController::class, 'Index']);
        Route::get('/newlead', [NewLeadController::class, 'Index'])->name('newlead');
        Route::get('/newlead/add', [NewLeadController::class, 'add'])->name('leadadd');
    });
});
