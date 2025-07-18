<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;



Route::view('/', 'home');

Route::view('/contact', 'contact');
 
// Route::controller(JobController::class)->group(function () {
//     // Prikazuje sve poslove ( index )
// Route::get('/jobs', 'index');
// // Prikazuje formu za kreiranje posla ( create )
// Route::get('/jobs/create', 'create');
// // Prikazuje formu za prikazivanje odredjenog posla( show )
// Route::get('/jobs/{job}', 'show');
// // Prikazuje formu za cuvanje poslova ( store )
// Route::post('/jobs','store' );
// // Prikazuje formu za izmenu posla ( Edit )
// Route::get('jobs/{job}/edit', 'edit');
// // Azuriranje posla ( update )
// Route::patch('/jobs/{job}', 'update');
// // Brisanje posla ( delete )
// Route::delete('/jobs/{job}','destroy' );
// });

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware(['auth','can:edit,job']);
Route::patch('/jobs/{job}', [JobController::class, 'update'])->middleware(['auth','can:edit,job']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware(['auth','can:edit,job']);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);