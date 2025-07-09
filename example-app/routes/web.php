<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home');
 
Route::controller(JobController::class)->group(function () {
    // Prikazuje sve poslove ( index )
Route::get('/jobs', 'index');
// Prikazuje formu za kreiranje posla ( create )
Route::get('/jobs/create', 'create');
// Prikazuje formu za prikazivanje odredjenog posla( show )
Route::get('/jobs/{job}', 'show');
// Prikazuje formu za cuvanje poslova ( store )
Route::post('/jobs','store' );
// Prikazuje formu za izmenu posla ( Edit )
Route::get('jobs/{job}/edit', 'edit');
// Azuriranje posla ( update )
Route::patch('/jobs/{job}', 'update');
// Brisanje posla ( delete )
Route::delete('/jobs/{job}','destroy' );
});


Route::view('/contact', 'contact');