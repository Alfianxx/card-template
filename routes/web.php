<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/card', [CardController::class, 'index']); // form input
// Route::post('/card/generate', [CardController::class, 'generate'])->name('card.generate');

Route::get('/card', [CardController::class, 'index'])->name('card.form');
Route::post('/card/generate', [CardController::class, 'generate'])->name('card.generate');
Route::get('/card/download/{fileName}', [CardController::class, 'download'])->name('card.download');