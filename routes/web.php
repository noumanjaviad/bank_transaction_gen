<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'getHomePage'])->name('home_page');

Route::get('form', [HomeController::class, 'getCreateForm'])->name('get_form');
Route::get('transaction_form',[HomeController::class,'getCreateTransactionForm'])->name('get_transaction_form');
Route::get('show_customer',[HomeController::class,'getCustomerShow']);
Route::post('/customers/create', [CustomerController::class, 'store'])->name('customers.store');

Route::get('nbd_customer',[HomeController::class,'getNbdCustomers'])->name('get_nbd_customers');
Route::get('get_mashriq_customers',[HomeController::class,'getMashriqCustomers'])->name('get_mashriq_customers');
Route::get('get_dubai_islamic_customers',[HomeController::class,'dubaiIslamicCustomers'])->name('get_dubai_islamic_customers');


