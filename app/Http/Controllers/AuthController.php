<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Display Log In Page Function
    public function login() {
        return view('auth.login');
    }

    // Log In function
    public function saveLogin(Request $request) {
        $request -> validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:12'
        ]);

        $user = Login::where('email', '=', $request -> email) -> first();

        if($user) {
            if(Hash::check($request -> password, $user -> password)) {
                $request -> session() -> put('loginId', $user -> id);
                return redirect('/dashboard') -> with('success', 'Logged In Successfull!!');
            } else {
                return back() -> with('fail', 'Incorrect Credentials!!');
            } 
        } else {
            return back() -> with('fail', 'You do not access to this portal!!');
        }
    }

    // Log out Function
    public function logout() {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/login');
        }
    }
}
