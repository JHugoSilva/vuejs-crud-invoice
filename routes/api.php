<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get_all_invoice', [InvoiceController::class , 'index']);
Route::get('/search_invoice', [InvoiceController::class , 'search_invoice']);
Route::get('/create_invoice', [InvoiceController::class , 'create_invoice']);
Route::get('/customers', [CustomerController::class , 'index']);
Route::get('/customers', [CustomerController::class , 'index']);
Route::get('/products', [ProductController::class , 'index']);
Route::post('/add_invoice', [InvoiceController::class , 'add_invoice']);
Route::get('/invoice/{id}', [InvoiceController::class , 'show']);
Route::get('/invoice_edit/{id}', [InvoiceController::class , 'edit']);
Route::post('/invoice_update/{id}', [InvoiceController::class , 'update']);
Route::delete('/delete_invoice/{id}', [InvoiceController::class , 'destroy']);
Route::delete('/delete/{id}', [InvoiceItemController::class , 'destroy']);




