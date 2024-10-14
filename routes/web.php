<?php

use App\Http\Controllers\MTDIController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::prefix('/tren-kinerja')->group(function () {


    Route::prefix('/manajemen-teknis-data-dan-informasi')->group(function () {

        Route::get('/', [MTDIController::class, 'trendIndex'])->name('trendIndex.MTDI');

    });


});
