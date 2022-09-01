<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

//Home
Route::get('/', [ProductController::class, "index"]) ->name('product');
Route::get('/', [HomeController::class, "index"]) ->name('home');

//Product 
Route::prefix('/product') ->group(function (){
    Route::get('/', [ProductController::class, "index"]) ->name('product');
    Route::post('/store', [ProductController::class, "store"]) ->name('product.store');
    Route::get('/{task_id}/delete', [ProductController::class, "delete"]) ->name('product.delete');
    Route::get('/{task_id}/update', [ProductController::class, "update"]) ->name('product.update');
    Route::get('/{task_id}/view', [ProductController::class, "view"]) ->name('product.view');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');