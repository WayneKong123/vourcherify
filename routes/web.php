<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VoucherController;
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

Route::get('/', function () {
    return view('welcome');
});

// Customer routes
Route::get('/customers/login', [CustomerController::class, 'showLoginForm'])->name('customers.login');
Route::get('/login', [CustomerController::class, 'login'])->name('login');

Route::post('/customers/login', [CustomerController::class, 'login'])->name('customers.login.submit');
Route::get('/customers/signup', [CustomerController::class, 'showSignupForm'])->name('customers.signup');
Route::post('/customers/signup', [CustomerController::class, 'signup'])->name('customers.signup.submit');

Route::middleware('auth')->group(function () {
    Route::get('/customers/dashboard', [CustomerController::class, 'dashboard'])->name('customers.dashboard');
    Route::get('/customers/edit/{customer}', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('/customers/update/{customer}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/customers/delete/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
});

// User routes
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->

// Voucher routes
Route::get('/vouchers', [VoucherController::class, 'index'])->name('vouchers.index');
Route::get('/vouchers/{id}/show', [VoucherController::class, 'show'])->name('vouchers.show');
Route::post('/vouchers', [VoucherController::class, 'store'])->name('vouchers.store');
Route::get('/vouchers/{id}/edit', [VoucherController::class,'edit'])->name('vouchers.edit');
Route::get('/vouchers/create', [VoucherController::class, 'create'])->name('vouchers.create');
Route::put('/vouchers/{id}/update', [VoucherController::class, 'update'])->name('vouchers.update');
Route::delete('/vouchers/{voucher}', [VoucherController::class, 'destroy'])->name('vouchers.destroy');

