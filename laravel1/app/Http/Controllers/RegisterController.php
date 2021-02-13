<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register.index");
    }

    public function store(LoginRequest $request)
    {
        $login_name = $request->name;
        return view("home.index", compact("login_name"));
    }
}
