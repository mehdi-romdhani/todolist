<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    //
    public function show()
    {
        return view('register.register');
    }

    public function store(Request $request)
    {
         User::create($request->all());
        return redirect(RouteServiceProvider::HOME);
    }
}
