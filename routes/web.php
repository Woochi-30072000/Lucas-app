<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => ''], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'category'], function(){
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::post('/', [CategoryController::class, 'index']);
        
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');



    }); 



    Route::group(['prefix' => 'pruduct'], function(){
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::post('/', [ProductController::class, 'index']);

        Route::get('/create', [ProductController::class, 'create'])->name('product.create');



    }); 

});









