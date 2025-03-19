<?php

use App\Http\Controllers\FeatureController;

Route::group(['prefix'=>'features'], function () {
    Route::get('/', [FeatureController::class, 'index']);
    Route::get('/{id}', [FeatureController::class, 'show'])->name('show');
    Route::post('/', [FeatureController::class, 'store'])->name('store');
    Route::put('/{id}', [FeatureController::class, 'update'])->name('update');
    Route::delete('/{id}', [FeatureController::class, 'destroy'])->name('delete');
});
