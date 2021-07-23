<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\ProdSupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReceivingController;
use App\Http\Controllers\IssuingController;
use App\Http\Controllers\ClosingController;
use App\Http\Controllers\InvoiceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/signup',[UserController::class,'signup']);
Route::post('/login',[UserController::class,'login']);

/*Route::group(['middleware'=>['auth:api']],function(){
    Route::get('/get-product',[ProductController::class,'getProduct']);
});*/


Route::post('/add-supplier',[SupplierController::class,'addSupplier']);
Route::post('/edit-supplier',[SupplierController::class,'editSupplier']);
Route::post('/delete-supplier',[SupplierController::class,'deleteSupplier']);
Route::get('/get-supplier',[SupplierController::class,'getSupplier']);


Route::post('/add-product',[ProductController::class,'addProduct']);
Route::post('/edit-product',[ProductController::class,'editProduct']);
//Route::post('/delete-product',[ProductController::class,'deleteProduct'])->middleware('admin');
Route::post('/delete-product',[ProductController::class,'deleteProduct'])->middleware('admin');
Route::get('/get-product',[ProductController::class,'getProduct']);


Route::post('/add-location',[LocationController::class,'addLocation']);
Route::post('/edit-location',[LocationController::class,'editLocation']);
Route::post('/delete-location',[LocationController::class,'deleteLocation']);
Route::get('/get-location',[LocationController::class,'getLocation']);

Route::post('/add-purchaseOrder',[PurchaseOrderController::class, 'addPurchaseOrder']);
Route::post('/edit-purchaseOrder',[PurchaseOrderController::class, 'editPurchaseOrder']);
Route::post('/delete-purchaseOrder',[PurchaseOrderController::class, 'deletePurchaseOrder']);
Route::get('/get-purchaseOrder',[PurchaseOrderController::class, 'getPurchaseOrder']);

Route::post('/add-prodSup',[ProdSupController::class, 'addProdSup']);
Route::post('/edit-prodSup',[ProdSupController::class, 'editProdSup']);
Route::post('/delete-prodSup',[ProdSupController::class, 'deleteProdSup']);
Route::get('/get-prodSup',[ProdSupController::class, 'getProdSup']);


Route::post('/add-receiving',[ReceivingController::class, 'addReceiving']);
Route::post('/edit-receiving',[ReceivingController::class, 'editReceiving']);
Route::post('/delete-receiving',[ReceivingController::class, 'deleteReceiving']);
Route::get('/get-receiving',[ReceivingController::class, 'getReceiving']);


Route::post('/add-issuing',[IssuingController::class, 'addIssuing']);
Route::post('/edit-issuing',[IssuingController::class, 'editIssuing']);
Route::post('/delete-issuing',[IssuingController::class, 'deleteIssuing']);
Route::get('/get-issuing',[IssuingController::class, 'getIssuing']);


Route::post('/add-closing',[ClosingController::class, 'addClosing']);
Route::post('/edit-closing',[ClosingController::class, 'editClosing']);
Route::post('/delete-closing',[ClosingController::class, 'deleteClosing']);
Route::get('/get-closing',[ClosingController::class, 'getClosing']);


Route::post('/add-invoice',[InvoiceController::class, 'addInvoice']);
Route::post('/edit-invoice',[InvoiceController::class, 'editInvoice']);
Route::post('/delete-invoice',[InvoiceController::class, 'deleteInvoice']);
Route::get('/get-invoice',[InvoiceController::class, 'getInvoice']);