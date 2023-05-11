<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use App\Http\Controllers\TicketController;

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

Route::get('/test', function () {
    return view('test');
})->name('test');
Route::post('submit-ticket',[TicketController::class, 'store'])->name('ticket.submit');
Route::get('get-pdf/{id}',[TicketController::class, 'pdf'])->name('ticket.pdf');
Route::get('/submit-ticket-success', function () {
    return view('pageSuccess');
})->name('pageSuccess');
Route::get('/',[AppController::class, 'index']);
Route::get('/password-reset-notification', function () {
    return view('notification.password-request');
})->name('password.reset.notification');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Stafs routes
    Route::get('/users-list', [userController::class, 'index'])->name('users.list');
    Route::get('/export-users',[userController::class, 'exportUser'])->name('exportUser');
    Route::get('/add-staf', [StafsController::class, 'create'])->name('add.staf');
    Route::post('/add-staf', [StafsController::class, 'store'])->name('add.staf');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
