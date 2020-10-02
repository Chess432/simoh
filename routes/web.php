<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/cashflow', [App\Http\Controllers\PagesController::class, 'cash_flow'])->name('cashflow');
Route::get('/profitability', [App\Http\Controllers\PagesController::class, 'profitability'])->name('profitability');

Route::namespace('Supplier')->prefix('supplier')->name('supplier.')->group(function(){
    Route::resource('/supplier', 'SuppliersController');
});

Route::namespace('Expense')->prefix('expense')->name('expense.')->group(function(){
    Route::resource('/expense', 'ExpensesController');
});

Route::namespace('Client')->prefix('client')->name('client.')->group(function(){
    Route::resource('/client', 'ClientsController');
});

Route::namespace('Computations')->prefix('computations')->name('computations.')->group(function(){
    Route::resource('/computations', 'ComputationsController');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
