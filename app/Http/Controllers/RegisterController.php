<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
class RegisterController extends Controller
{
    public function create() {
        return view("pages.register.create");
    }

    public function store(Request $request) {

        $validator = $request->validate([
            'fullName' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'max:191', 'email', 'unique:users'],
            'password' => ['required', 'string', Rules\Password::default()]
        ]);

        if(!$validator) {
            return back()->withErrors([
                'fullName' => 'Error message for fullName field',
                'email' => 'Error message for email field',
                'password' => 'Error message for password field',
            ]);

        }

        User::create($validator);

        return redirect('/');
    }

}
