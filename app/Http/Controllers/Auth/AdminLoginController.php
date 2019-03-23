<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct() 
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        return view('admindashboard.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember)) 
        {
            return redirect()->intended(route('adminhome'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect()->intended(route('adminlogin'));
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
