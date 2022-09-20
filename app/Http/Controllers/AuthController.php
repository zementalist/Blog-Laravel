<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function showRegister() {
        return view("auth.register");
    }

    public function showLogin() {
        return view("auth.login");
    }

    public function register(Request $request) {
        $data = $request->validate([
            "name" => ["required", "min:3", "max:50"],
            "email" => ["required", "email"],
            "password" => ["required" , "confirmed"],
        
        ]
    );
        $data["password"] = bcrypt($data["password"]);

        $user = User::create($data);
        return redirect("/login")->with("message", "Account is created. Please login");
    }

    public function login(Request $request) {
        $data = $request->validate([
            "email" => ["required"],
            "password" => ["required"]
        ]);

        // dd($data);
        if(auth()->attempt($data)) {
            session()->regenerate();
            return redirect("/")->with("message", "You logged in");
        }
        return back()->withErrors(["email" => "Invalid credentials"]);

    }

    public function logout() {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect("/")->with("message", "Signed out");
    }

}
