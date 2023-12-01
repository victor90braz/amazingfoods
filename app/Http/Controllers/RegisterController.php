<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(Request $request)  {
        return view('pages.register.create');
    }

    public function store(Request $request)  {

        //dd($request->all());

    }
}
