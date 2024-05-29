<?php

use App\Http\Controllers\MyTestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('data-table', [MyTestController::class, 'dataTable'])->name('dataTable');
