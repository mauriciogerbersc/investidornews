<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\NewsController::class)->name('news.index');

Route::group(['prefix' => 'news'], function () {
    Route::get('/', \App\Http\Controllers\CreateNewsController::class)->name('news');
    Route::get('/{id?}', \App\Http\Controllers\ReadNewsController::class)->name('news.read');
    Route::post('/', \App\Http\Controllers\StoreNewsController::class)->name('news.store');
});

Route::group(['prefix' => 'category'], function () {
    Route::get('/', \App\Http\Controllers\CreateCategoryController::class)->name('categories');
    Route::post('/', \App\Http\Controllers\StoreCategoryController::class)->name('category.store');
});