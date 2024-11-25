<?php

use App\Http\Controllers\Admin\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('dashboard',function(){
//     return view('index');
// });
Route::get('dashboard', [HomeController::class, 'getHomePage'])->name('home_page');

Route::get('form', [HomeController::class, 'getForm'])->name('get_form');
