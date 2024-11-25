<?php

use App\Livewire\Routes;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('routes', Routes::class);
