<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;

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

Route::get('/',[AppController::class, 'index']);

Route::get('/password-reset-notification', function () {
    return view('notification.password-request');
})->name('password.reset.notification');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Stafs routes
    Route::get('/employee-list', [userController::class, 'index'])->name('employee.list');
    Route::get('/export-users',[userController::class, 'exportUser'])->name('exportUser');
    Route::get('/add-employee', [userController::class, 'create'])->name('add.employee');
    Route::post('/add-employee', [userController::class, 'store'])->name('add.employee');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
