<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    //Categories
    /*Name: Categories
    *Url: /admin/categories
    *Route: admin.categories.*
    */
    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
        Route::get('/', [CategoryController::class,'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/', [CategoryController::class,'store'])->name('store');
        Route::get('/edit/{category:slug}', [CategoryController::class,'edit'])->name('edit');
        Route::put('/{category:slug}', [CategoryController::class,'update'])->name('update');
        Route::delete('/{category:slug}', [CategoryController::class,'delete'])->name('delete');
    });

    //Categories
    /*Name: Tags
    *Url: /admin/tags
    *Route: admin.tags.*
    */
    Route::group(['prefix' => 'tags', 'as' => 'tags.'], function () {
        Route::get('/', [TagController::class,'index'])->name('index');
        Route::get('/create', [TagController::class, 'create'])->name('create');
        Route::post('/', [TagController::class,'store'])->name('store');
        Route::get('/edit/{tag:slug}', [TagController::class,'edit'])->name('edit');
        Route::put('/{tag:slug}', [TagController::class,'update'])->name('update');
        Route::delete('/{tag:slug}', [TagController::class,'delete'])->name('delete');
    });
});
