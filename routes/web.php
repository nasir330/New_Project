<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use App\Http\Controllers\CompanyProfileController;

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
    //employees routes
    Route::get('/employee-list', [userController::class, 'index'])->name('employee.list');
    Route::get('/export-users',[userController::class, 'exportUser'])->name('exportUser');
    Route::get('/add-employee', [userController::class, 'create'])->name('add.employee');
    Route::post('/add-employee', [userController::class, 'store'])->name('add.employee');
    Route::get('/employee-view/{id}',[UserController::class,'view'])->name('view.employee');
    Route::get('/employee-edit/{id}',[UserController::class,'edit'])->name('edit.employee');
    Route::get('/employee-delete/{id}',[UserController::class,'delete'])->name('delete.employee');
    Route::post('/employee-photo-update',[UserController::class,'photoUpdate'])->name('photoUpdate.employee');
    Route::post('/employee-info-update',[UserController::class,'infoUpdate'])->name('infoUpdate.employee');
    Route::post('/employee-company-info-update',[UserController::class,'companyInfoUpdate'])->name('companyInfoUpdate.employee');
    Route::post('/employee-financial-info-update',[UserController::class,'financialInfoUpdate'])->name('financialInfoUpdate.employee');

    //company profile
    route::get('/setting-profile',[CompanyProfileController::class, 'index'])->name('setting.profile');
    route::post('/setting-profile-company-details',[CompanyProfileController::class, 'storeCompanyDetails'])->name('setting.profile.companyDetails');
    route::post('/setting-profile-logo-header-footer',[CompanyProfileController::class, 'storeLogoHeaderFooter'])->name('setting.profile.logoHeaderFooter');
    route::post('/setting-profile-payment-account',[CompanyProfileController::class, 'storePaymentAccount'])->name('setting.profile.paymentAccount');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
