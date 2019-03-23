<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	$data = Admin::get();
        return view('admindashboard.admin', compact('data'));
    }

    public function create()
    {
    	return view('admindashboard.createadmin');
    }

    public function store(Request $request)
    {
    	$q = new Admin;
        $q->name = $request->input('name');
        $q->email = $request->input('email');
        $q->password = bcrypt($request->input('password'));
        $q->role_id = $request->input('role_id');
        $q->save();
        return redirect()->intended(route('adminuser'));
    }
}
