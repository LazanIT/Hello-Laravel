<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

 


    return view('home');
    
});

   
// Prikazuje sve poslove ( index )
Route::get('/jobs', function () {

    $jobs = Job::with('employer')->latest()->simplePaginate(3);

     return view('jobs.index', [
        'jobs' => $jobs
     
    ]);
});

// Prikazuje formu za kreiranje posla ( create )
Route::get('/jobs/create', function(){
    return view('jobs.create');
});


// Prikazuje formu za prikazivanje poslova ( show )
Route::get('/jobs/{id}', function($id)  {
     
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});


// Prikazuje formu za cuvanje poslova ( store )
Route::post('/jobs', function(){
    request()->validate([
        'title' => ['required','min:3'],
        'salary' => ['required','numeric']
    ]);

    Job::create([
        'title' => request('title'),
        'salary'=> request('salary'),
        'employer_id' => 1
    ]);
 
    return redirect('/jobs');
});


// Prikazuje formu za izmenu posla ( Edit )
Route::get('jobs/{id}/edit', function ($id){
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});
// Azuriranje posla ( update )
Route::patch('/jobs/{id}', function($id)  {
     // validate
    request()->validate()([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

     // authorize ( On Hold...)


     // update

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
   
     //redirect

     return redirect('/jobs/', $job->id);
});

// Brisanje posla ( delete )
Route::delete('/jobs/{id}', function($id)  {
     // authorize ( On Hold... )
     // delete

     $job = Job::findOrFail($id);

     $job->delete();

     // redirect

    return redirect('/jobs');
});

Route::get('/contact', function(){
    return view('contact');
});