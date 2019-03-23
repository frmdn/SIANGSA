<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tagihan;
use Auth;

class TagihanController extends Controller
{
    public function index()
    {
    	$data = Tagihan::where('user_id','=',Auth::user()->user_id)->where('status','<>','2')->get();
    	$judul = "Langganan";
    	return view('userdashboard.langganan', compact('data','judul'));
    }

    public function invoice()
    {
    	$data = Tagihan::where('user_id','=',Auth::user()->user_id)->where('status','<>','2')->get();
    	$judul = "Langganan";
    	return view('userdashboard.invoice', compact('data','judul'));
    }
}
