<?php

use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsPage;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RequestListController;
use App\Http\Controllers\ItemController;

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

//View for pages
Route::get('/', [ViewController:: class, 'loginform']);

Route::get('/dashboard', [ViewController:: class, 'dashboard'])->name('dashboard');
Route::get('/products', [ViewController:: class, 'products'])->name('products');
Route::get('/products/form', [ViewController:: class, 'requestform'])->name('requestsform');
Route::get('/requests', [ViewController:: class, 'requests'])->name('requests');
Route::get('/branches', [ViewController:: class, 'branches'])->name('branches');
Route::get('/admin', [ViewController:: class, 'admin'])->name('admin');



//Login
Route::get('/login',  [ViewController:: class, 'loginform'])->name('login');
Route::post('/login', [LoginController:: class, 'valid']);
//Logout
Route::get('/logout', [LoginController:: class, 'logout'])->name('logout');

//Request Form
Route::post('newRequest', [RequestController:: class, 'store'])->name('newRequest');
Route::get('/sendRequest', [RequestController:: class, 'destroy'])->name('sendRequest');

Route::get('/showReqList', [RequestController:: class, 'show'])->name('showReqList');

//Request List
Route::get('/addToList', [RequestListController:: class, 'store']);


//Live search in RequestListController
Route::get('/live_search', [RequestListController:: class, 'action'])->name('request_list.action');
Route::get('/searchProduct', [ProductsPage:: class, 'action'])->name('products_page.action');
Route::get('/addItem', [ProductsPage:: class, 'store']);

//Live search in Products Page
Route::get('/searchProduct', [ProductsPage:: class, 'action'])->name('products_page.action');
Route::get('/addItem', [ProductsPage:: class, 'store']);

Route::delete('cancelItem', [ProductsPage:: class, 'destroy']);

//Register Employee
Route::post('addEmployee',[LoginController:: class, 'store']);

//Admin Actions
Route::POST('itemActions', [ItemController::class,'itemActions']);  
Route::POST('newItem', [ItemController::class,'newItem']);
Route::POST('newBrand', [ItemController::class,'newBrand']);
Route::POST('newSupplier', [ItemController::class,'newSupplier']);
Route::POST('editItem', [ItemController::class,'editItemActions']);

Route::POST('newTag', [TagController::class,'newTag']);
Route::POST('tagActions', [TagController::class,'tagActions']); 
Route::POST('editTag', [TagController::class,'editTag']);