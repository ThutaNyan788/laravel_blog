<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function create(Request $request)
    {
        return view('register.create');
    }

    public function store()
    {
        $requestData = request()->validate([
            "name" => 'required',
            "username" => 'required',
            'email' => 'required|email',
            'password' => "required|max:6"
        ]);



        $user = new User();
        $user->name = $requestData['name'];
        $user->username = $requestData['username'];
        $user->email = $requestData['email'];
        $user->password = $requestData['password'];
        $user->save();


        auth()->login($user);

        return redirect("/")->with(["success" => "Welcom back!"]);
    }


    public function logout()
    {
        auth()->logout();
        return redirect("/");
    }

    public function index()
    {
        return view("login.index");
    }

    public function login()
    {

        request()->validate([
            'email' => 'required|email',
            'password' => "required|max:6"
        ]);

        if (auth()->attempt(["email" => request('email'), "password" => request('password')])) {
            return redirect("/")->with(["success" => "Welcom back!"]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
