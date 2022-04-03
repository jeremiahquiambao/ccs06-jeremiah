<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeremiahController;

Route::get('/', [JeremiahController::class, 'index']);
Route::get('/chapter/{chapter_number}',[JeremiahController::class, 'readByChapter']);
Route::get('/all-chapters', [JeremiahController::class, 'readAllChapters']); 