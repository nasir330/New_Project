<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PurchaseController;

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
    //Contacts
    Route::get('/contacts-list', [ContactsController::class, 'index'])->name('contacts.list');
    Route::get('/add-contacts', [ContactsController::class, 'create'])->name('add.contacts');
    Route::post('/add-contacts', [ContactsController::class, 'store'])->name('add.contacts');
    Route::get('/view-contacts/{id}', [ContactsController::class, 'view'])->name('view.contacts');
    Route::get('/edit-contacts/{id}', [ContactsController::class, 'edit'])->name('edit.contacts');
    Route::post('/update-contact-photo', [ContactsController::class, 'updatePhoto'])->name('update.contacts.photo');
    Route::post('/update-contacts', [ContactsController::class, 'update'])->name('update.contacts');
    Route::get('/delete-contacts/{id}', [ContactsController::class, 'delete'])->name('delete.contacts');
    Route::get('/contacts-search', [ContactsController::class, 'searchContacts']);
    Route::post('/contacts-select', [ContactsController::class, 'selectContacts']);
    // Route::get('/export-users',[userController::class, 'exportUser'])->name('exportUser');

    //purchase
    Route::get('purchase-list',[PurchaseController::class, 'index'])->name('purchase.list');
    Route::get('add-purchase',[PurchaseController::class, 'create'])->name('add.purchase');
    Route::post('add-purchase-item',[PurchaseController::class, 'addPurchaseItem']);
    Route::get('/fetch-purchase-item',[PurchaseController::class, 'fetchPurchaseItem']);
    Route::get('/remove-purchase-item/{id}',[PurchaseController::class, 'removePurchaseItem'])->name('remove.purchase.item');
    Route::post('submit-purchase',[PurchaseController::class, 'store'])->name('submit.purchase');
    Route::get('view-purchase/{id}',[PurchaseController::class, 'view'])->name('view.purchase');
    Route::get('view-purchase-details/{invoiceId}',[PurchaseController::class, 'viewDetails'])->name('view.purchase.details');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
