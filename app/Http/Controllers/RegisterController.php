<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        User::create($validator);

        return redirect('/');
    }

}
