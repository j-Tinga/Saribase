<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
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


/* goes to item page */
Route::get('/', [PagesController::class,'main']);
Route::get('/tags', [PagesController::class,'main']);


Route::POST('addActions', [PagesController::class,'addActions']);
Route::POST('newItem', [ItemController::class,'store']);
Route::POST('editItem', [ItemController::class,'editItem']);
Route::POST('itemActions', [ItemController::class,'index'])->name('itemActions');
