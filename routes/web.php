<?php

use App\http\Controllers\hellowworldcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', [hellowworldcontroller::class, 
'index]);
