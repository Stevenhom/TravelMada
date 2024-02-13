<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [\App\Http\Controllers\Controller::class, 'index']); 

Route::resource('admin', AdminController::class)->only([
    'index', 'create', 'show', 'edit', 'update', 'destroy'
]);

Route::get('login', [\App\Http\Controllers\AdminController::class, 'login'])->name('login');
Route::post('login', [\App\Http\Controllers\AdminController::class, 'loginSave'])->name('login.save');



