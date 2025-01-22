<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Controller::class, 'welcome'])->name('welcome');


Route::post('/welcome', function () {
    return response()->json(['message' => 'POST request handled']);
});


Route::any('/', function () {
    return view('welcome');
});