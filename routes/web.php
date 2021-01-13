<?php

use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsPage;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RequestListController;
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
Route::get('/branches', [ViewController:: class, 'branches'])->name('branches');
Route::get('/admin', [ViewController:: class, 'admin'])->name('admin');



//Login
Route::get('/login',  [ViewController:: class, 'loginform'])->name('login');
Route::post('/login', [LoginController:: class, 'valid']);
//Logout
Route::get('/logout', [LoginController:: class, 'logout'])->name('logout');

//Request Form
Route::post('newRequest', [RequestController:: class, 'store'])->name('newRequest');

//Request List
Route::get('/addToList', [RequestListController:: class, 'store']);
Route::get('/request', [ProductsPage:: class, 'show'])->name('requests');

//Live search in RequestListController
Route::get('/live_search', [RequestListController:: class, 'action'])->name('request_list.action');
Route::get('/searchProduct', [ProductsPage:: class, 'action'])->name('products_page.action');
Route::get('/addItem', [ProductsPage:: class, 'store']);

Route::delete('cancelItem', [ProductsPage:: class, 'destroy']);