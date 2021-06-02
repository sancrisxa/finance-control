<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

Route::prefix('customers')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::post('/', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::get('/{customer}', [CustomerController::class, 'show'])
        ->name('customers.show')
        ->where('customer', '[0-9]+');
    Route::get('/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('/{customer}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
});


Route::prefix('invoice')->group(function () {
    Route::get('/', [InvoiceController::class, 'index']);
    Route::get('/create', [InvoiceController::class, 'create']);
    Route::post('/', [InvoiceController::class, 'store']);
});





