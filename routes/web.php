<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\EmployeeController;
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


/* goes to item page */
Route::get('/employees', [EmployeeController::class,'show']);
Route::POST('showMaker', [EmployeeController::class,'showMaker']);

Route::POST('addEmployee', [EmployeeController::class,'addEmployee']);
Route::POST('editEmployee', [EmployeeController::class,'editEmployee']);
Route::POST('employeeActions', [EmployeeController::class,'employeeActions']);


Route::get('/', [PagesController::class,'main'])->name('itemPage');
Route::view('/tags', 'Item.tags');

Route::POST('addActions', [PagesController::class,'addActions']);
Route::POST('newItem', [ItemController::class,'store']);
Route::POST('editItem', [ItemController::class,'editItem']);
Route::POST('itemActions', [ItemController::class,'index']);
