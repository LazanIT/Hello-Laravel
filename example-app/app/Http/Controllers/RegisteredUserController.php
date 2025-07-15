<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create() {
       return view('auth.register');
    }

    public function store(){
       // validate
       request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(6), 'confirmed']
       ]);
       // create the user in data base

       // log in

       // redirect

       return redirect('/');
    }

}
