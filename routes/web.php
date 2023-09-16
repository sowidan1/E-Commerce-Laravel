<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubSubcategoryController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// groub category -> prefix  -> name foreach rourte

Route::prefix('categories')->group(function(){
    

    Route::get('/create', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/', [CategoryController::class, 'index2'])->name('categories.index2');
    Route::get('/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/{id}', [CategoryController::class, 'showupdate'])->name('categories.showupdate');
    Route::post('/', [CategoryController::class, 'create'])->name('categories.create');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{id}', [CategoryController::class, 'delete'])->name('categories.delete');

});

Route::prefix('sub-subcategories')->group(function () {
    Route::get('/', [SubSubcategoryController::class, 'index'])->name('sub-subcategories.index');
    Route::get('/{id}', [SubSubcategoryController::class, 'show'])->name('sub-subcategories.show');
    Route::post('/', [SubSubcategoryController::class, 'create'])->name('sub-subcategories.create');
    Route::put('/{id}', [SubSubcategoryController::class, 'update'])->name('sub-subcategories.update');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/add',[ProductController::class, 'add'])->name('product.add');
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::post('/', [ProductController::class, 'create'])->name('products.create');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
});