<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\GeneratePdfController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('getSigninView', [AuthController::class, 'getSigninView']);
Route::get('getSignupView', [AuthController::class, 'getSignupView']);
Route::post('/signin', [AuthController::class, 'signIn'])->name('signin.store');
Route::post('/signup', [AuthController::class, 'register'])->name('signup.store');
// Route::middleware('auth')->group(function () {

//     Route::get('form', [HomeController::class, 'getCreateForm'])->name('get_form');
//     Route::get('transaction_form/{productId}', [HomeController::class, 'getCreateTransactionForm'])->name('get_transaction_form');
//     Route::get('show_customer', [HomeController::class, 'getCustomerShow']);
//     Route::post('/customers/create', [CustomerController::class, 'store'])->name('customers.store');
//     Route::post('transaction_form/{productId}', [HomeController::class, 'storeTransaction'])->name('store_transaction');

//     Route::get('nbd_customer', [HomeController::class, 'getNbdCustomers'])->name('get_nbd_customers');
//     Route::get('get_mashriq_customers', [HomeController::class, 'getMashriqCustomers'])->name('get_mashriq_customers');
//     Route::get('get_dubai_islamic_customers', [HomeController::class, 'dubaiIslamicCustomers'])->name('get_dubai_islamic_customers');

//     Route::get('generate_pdf', [GeneratePdfController::class, 'generatePdf']);
//     Route::get('get_product/{productid}', [CustomerController::class, 'getProduct'])->name('get_product');
//     Route::get('test', [GeneratePdfController::class, 'test']);
// });


Route::get('form', [HomeController::class, 'getCreateForm'])->name('get_form');
Route::get('transaction_form/{productId}',[HomeController::class,'getCreateTransactionForm'])->name('get_transaction_form');
Route::post('store-transaction',[TransactionController::class,'storeTransaction'])->name('store_transaction');
Route::get('show_customer',[HomeController::class,'getCustomerShow']);
Route::post('/customers/create', [CustomerController::class, 'store'])->name('customers.store');


Route::get('nbd_customer',[HomeController::class,'getNbdCustomers'])->name('get_nbd_customers');
Route::get('get_mashriq_customers',[HomeController::class,'getMashriqCustomers'])->name('get_mashriq_customers');
Route::get('get_dubai_islamic_customers',[HomeController::class,'dubaiIslamicCustomers'])->name('get_dubai_islamic_customers');

Route::get('generate_pdf',[GeneratePdfController::class,'generatePdf']);
Route::get('get_product/{productid}',[CustomerController::class,'getProduct'])->name('get_product');
Route::get('test',[GeneratePdfController::class,'test'])->name('test-up');
Route::get('get-search/{id}',[HomeController::class,'viewSearch'])->name('search');
Route::post('search-transaction',[HomeController::class,'storeSearch'])->name('search.transaction');

