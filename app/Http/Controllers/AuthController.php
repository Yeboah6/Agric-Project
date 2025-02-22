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

    // Display Profile Page Function
    public function profile() {
        $data = [];
        if (Session::has('loginId')) {
            $data = Login::where('id', '=', Session::get('loginId'))->first();
        }

        return view('auth.profile', compact('data'));
    }

    // Update Profile Info Function
    public function updateProfile(Request $request) {
        $request -> validate([
            'email' => 'required|email',
            'new_username' => 'required|string',
            'new_email' => 'required|email|unique:logins,email,' . Login::where('email', $request ->email)->value('id'),
            'new_password' => 'required|string|min:8|max:12',
            'confirm_password' => 'required|string|min:8|max:12'
        ]);

        if ($request->input('new_password') !== $request->input('confirm_password')) {
            return back()->with('fail', "Passwords don't match!!");
        }
        $profile = Login::where('email', '=', $request -> email) -> first();
        
        if($profile) {
            // Update email and password if valid
            $profile -> username = $request -> input('new_username');
           $profile -> email = $request->input('new_email');
           $profile -> password = Hash::make($request->input('new_password'));
           $profile -> save();
           return back() -> with('success', 'Admin Info Updated Successfully');
       } else {
           return back() -> with('fail', 'Incorrect Credentials!!');
       }
    }

}
