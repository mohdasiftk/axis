<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SqlController;
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

Route::get('/',[HomeController::class,'invoice'])->name('invoice');
Route::get('create-invoice',[HomeController::class,'createInvoice'])->name('create.invoice');
Route::get('edit-invoice/{id}',[HomeController::class,'editInvoice'])->name('edit.invoice');
Route::post('add-invoice',[SqlController::class,'addInvoice'])->name('add.invoice');
Route::get('delete-invoice/{id}',[SqlController::class,'deleteInvoice'])->name('delete.invoice');
Route::post('update-invoice',[SqlController::class,'updateInvoice'])->name('update.invoice');
Route::get('customer-sales',[HomeController::class,'customerSales'])->name('customer.sales');
Route::get('item-sales',[HomeController::class,'itemSales'])->name('item.sales');
Route::get('all-sales',[HomeController::class,'allSales'])->name('all.sales');
Route::get('no-sales',[HomeController::class,'noSales'])->name('no.sales');