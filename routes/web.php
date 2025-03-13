<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/trangchu', function () {
    return view('page.trangchu');
});
Route::get('/pagetrangchu', [PageController::class, 'getIndex']);
Route::get('/type/{id}', [PageController::class, 'getType']);