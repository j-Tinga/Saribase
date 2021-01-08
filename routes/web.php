<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TagController;
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
Route::get('/item', [PagesController::class,'itemPage'])->name('itemPage');

/* POST actions for ItemPage*/
Route::POST('adminForms', [PagesController::class,'showForms']);
Route::POST('itemActions', [ItemController::class,'itemActions']);
Route::POST('newItem', [ItemController::class,'newItem']);
Route::POST('newBrand', [ItemController::class,'newBrand']);
Route::POST('newSupplier', [ItemController::class,'newSupplier']);
Route::POST('editItem', [ItemController::class,'editItemActions']);

/* POST actions for ItemPage*/
Route::POST('newTagForm', [TagController::class,'newTagForm']);
Route::POST('newTag', [TagController::class,'newTag']);
Route::POST('tagActions', [TagController::class,'tagActions']); //Actions consists of Adding, Removing, Deleting and Editing Tags
Route::POST('editTag', [TagController::class,'editTag']);
