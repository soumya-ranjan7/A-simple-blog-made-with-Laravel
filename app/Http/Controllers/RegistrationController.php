<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Mail\WelcomeAgain;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }

    public function store()
    {
        $this->validate(request(),[

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user=User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        auth()->login($user);


        Mail::to($user)->send(new WelcomeAgain($user));

        flash('Thanks for signing up.')->success();

        return redirect()->home();
    }
}
