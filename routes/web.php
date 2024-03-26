<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------y
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\CommonController::class, 'dashboard'])->name('dashboard');
    // all customers list
    Route::get('/customers', [App\Http\Controllers\CommonController::class, 'customers'])->name('dashboard');

    Route::get('/add-customers', [App\Http\Controllers\CommonController::class, 'addcustomers'])->name('addcustomers');
    Route::get('/customers-details', [App\Http\Controllers\CommonController::class, 'customersdetails'])->name('customersdetails');
    Route::get('/trasactions', [App\Http\Controllers\CommonController::class, 'trasactions'])->name('trasactions');
    Route::get('/user-trasactions/userid', [App\Http\Controllers\CommonController::class, 'usertrasactions'])->name('usertrasactions');

    Route::get('/trasactions/txt', [App\Http\Controllers\CommonController::class, 'singletrasactions'])->name('singletrasactions');

    Route::get('/give-loan/userid', [App\Http\Controllers\CommonController::class, 'giveloan'])->name('giveloan');
    Route::get('/vendors', [App\Http\Controllers\CommonController::class, 'vendors'])->name('vendors');
    Route::get('/vendors-details/id', [App\Http\Controllers\CommonController::class, 'vendorsdetails'])->name('vendorsdetails');
    Route::get('/add-vendors', [App\Http\Controllers\CommonController::class, 'addvendors'])->name('addvendors');
    Route::get('/add-money/userid', [App\Http\Controllers\CommonController::class, 'addmoney'])->name('addmoney');
    Route::get('/monthly', [App\Http\Controllers\CommonController::class, 'monthly'])->name('monthly');
    




// //add new customer
// Route::get('/add-customers', function () {
//     return view('admin.add-customer');
// });
// //single customer details
// Route::get('/customers-details', function () {
//     return view('admin.customer-details');
// });
// //all transactions
// Route::get('/trasactions', function () {
//     return view('admin.all-transactions');
// });
// //single customer all loan details
// Route::get('/user-trasactions/userid', function () {
//     return view('admin.user-transactions');
// });
// //single transaction details of one user
// Route::get('/trasactions/txt', function () {
//     return view('admin.single-loan-transaction');
// });
// //give loan to user
// Route::get('/give-loan/userid', function () {
//     return view('admin.single-user-loan');
// });

// //vendors
// Route::get('/vendors', function () {
//     return view('admin.vendors');
// });
}

);

// // all customers list
// Route::get('/customers', function () {
//     return view('admin.customes');
// });
// //add new customer
// Route::get('/add-customers', function () {
//     return view('admin.add-customer');
// });
// //single customer details
// Route::get('/customers-details', function () {
//     return view('admin.customer-details');
// });
// //all transactions
// Route::get('/trasactions', function () {
//     return view('admin.all-transactions');
// });
// //single customer all loan details
// Route::get('/user-trasactions/userid', function () {
//     return view('admin.user-transactions');
// });
// //single transaction details of one user
// Route::get('/trasactions/txt', function () {
//     return view('admin.single-loan-transaction');
// });
// //give loan to user
// Route::get('/give-loan/userid', function () {
//     return view('admin.single-user-loan');
// });

// //vendors
// Route::get('/vendors', function () {
//     return view('admin.vendors');
// });
// //single vendor details
// Route::get('/vendors-details/id', function () {
//     return view('admin.vendor-details');
// });
// //add new vendors
// Route::get('/add-vendors', function () {
//     return view('admin.add-vendor');
// });
// //deposite money from vendors
// Route::get('/add-money/userid', function () {
//     return view('admin.deposite-money');
// });
// //monthly
// Route::get('/monthly', function () {
//     return view('admin.monthly');
// });
// //weekly
// Route::get('/weekly', function () {
//     return view('admin.weekly');
// });



