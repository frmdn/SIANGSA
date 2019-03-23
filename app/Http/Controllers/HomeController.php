<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Layanan;
use App\Tagihan;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')
            ->join('layanans', 'users.layanan_id', '=', 'layanans.id')
            ->select('users.*', 'layanans.keterangan')
            ->where('users.id', '=', Auth::user()->id)
            ->first();
        $tagihan = Tagihan::where('user_id','=',$data->user_id)->first();
        $judul = "Dashboard";
        return view('userdashboard.index', compact('data','tagihan','judul'));
    }
}
