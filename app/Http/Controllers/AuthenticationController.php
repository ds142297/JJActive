<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;


class AuthenticationController extends Controller
{
    public function index() {
        if (Auth::check()) {
            return redirect('admin/detail');
        }
        return view('pages.admin.auth.login');
    }

    public function authenticate(Request $request){
        if (Auth::check()) {
            return redirect('admin/detail');
        }
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/detail')->with('success_status', 'Logged in successfully.');
        }

        return redirect('admin/login')->with('error_status', 'Oops! You have entered invalid credentials');
        
        return view('pages.admin.auth.login');
    }

    public function logout() {
        if (!Auth::check()) {
            return redirect('admin/login');
        }
        Auth::logout();
  
        return redirect('admin/login');
    }

}
