<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.index');
// })->name('index');

// Route::get('/index', function () {
//     return view('pages.index');
//     })->name('index');

// Route::get('/create', function () {
//     return view('pages.create');
// })->name('create');


Route::get('/', [StudentController::class, 'index'])->name('index');

Route::get('/student-create', [StudentController::class, 'create'])->name('create');
Route::post('/student-create', [StudentController::class, 'store'])->name('storeStudent');
