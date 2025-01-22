<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Controller::class, 'welcome'])->name('welcome');