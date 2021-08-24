<?php

use App\Http\Controllers\{
	HomeController
};
use Illuminate\Support\Facades\{
	Auth,
	Route
};

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
