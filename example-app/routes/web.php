<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home');
 
// Prikazuje sve poslove ( index )
Route::get('/jobs', [JobController::class, 'index']);
// Prikazuje formu za kreiranje posla ( create )
Route::get('/jobs/create', [JobController::class, 'create']);
// Prikazuje formu za prikazivanje odredjenog posla( show )
Route::get('/jobs/{job}', [JobController::class, 'show']);
// Prikazuje formu za cuvanje poslova ( store )
Route::post('/jobs', [JobController::class. 'store'] );
// Prikazuje formu za izmenu posla ( Edit )
Route::get('jobs/{job}/edit', [JobController::class, 'edit']);
// Azuriranje posla ( update )
Route::patch('/jobs/{job}', [JobController::class, 'update']);
// Brisanje posla ( delete )
Route::delete('/jobs/{job}',[JobController::class, 'destroy'] );

Route::view('/contact', 'contact');