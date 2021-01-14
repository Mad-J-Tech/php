<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function register()
    {
        return view("loginregister.register");
    }

    public function post(Request $request)
    {
        $email_register = $request->email_register;
        $pass_register = $request->pass_register;

        $data = [
            "email_register" => $email_register,
            "pass_register" => $pass_register,
        ];

        return view("loginregister.login", $data);
    }

    public function login()
    {
        $data1 = [
            "email_register" => "",
            "pass_register" => "",
        ];
        return view("loginregister.login", $data1);
    }
}
