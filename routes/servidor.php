<?php

use App\Http\Controllers\{
	ServidorController
};
use Illuminate\Support\Facades\{
	Route
};

Route::match(['get', 'post'], 'servidores/search', [ServidorController::class, 'search'])->name('servidores.search');
Route::resource('servidores', ServidorController::class);
