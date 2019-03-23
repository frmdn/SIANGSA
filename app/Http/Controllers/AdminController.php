<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Blog;
use App\Admin;
use App\Laporan;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $user = DB::table('users')->count();
        $laporan = DB::table('laporans')->count();
    	return view('admindashboard.home', compact('user','laporan'));
    }

    public function create()
    {
    	return view('admindashboard.create');
    }
}
