<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResearchController;

// Route::get('/', function () {
//     return view('homeA', ['title' => 'home']);
// });

Route::get('/home', [ResearchController::class, 'home']) ->name('home.index');
Route::get('/writter/create', [ResearchController::class, 'create']) ->name('writter.create');
Route::post('/writter', [ResearchController::class, 'storeWritter']) ->name('writter.storeW');
Route::delete('/writter/{writter}/delete', [ResearchController::class, 'deleteW']) ->name('writter.delete');
Route::get('/writter', [ResearchController::class, 'writter']) ->name('writter.index');
Route::get('/research/create', [ResearchController::class, 'createR']) ->name('research.create');
Route::post('/research', [ResearchController::class, 'storeR']) ->name('research.storeR');
Route::delete('/research/{papper}/delete', [ResearchController::class, 'deleteP']) ->name('research.delete');

