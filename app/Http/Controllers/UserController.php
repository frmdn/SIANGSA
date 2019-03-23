<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($id)
    {
    	$data = User::findOrFail($id);
    	$judul = "Profil";
    	return view('userdashboard.profile',compact('data','judul'));
    }
}
