<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create() {
        return view("pages.register.create");
    }

    public function store(Request $request) {

        $validator = $request->validate([
            'fullName' => ['required', 'string', 'min:3', 'max:191'],
            'email' => ['required', 'string', 'max:191', 'email', 'unique:users'],
            'password' => ['required', 'string', Password::defaults()]
        ]);

        User::create($validator);

        return redirect('/');
    }
}
