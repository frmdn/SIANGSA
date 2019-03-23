<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tagihan;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TagihanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	$data = Tagihan::whereMonth('jatuhtempo', Carbon::now()->month)->get();
    	return view('admindashboard.tagihan',compact('data'));
    }

    public function show($id)
    {
        $data = Tagihan::findOrFail($id);
        return view('admindashboard.edittagihan', compact('data'));
    }

    public function pelunasan(Request $request) 
    {
        $data = [
            'status' => $request->input('status'),
            'tglbayar' => Carbon::now(),
        ];

        DB::table('tagihans')->where('id', $request->input('id'))->update($data);
        return redirect()->intended(route('tagihan'));
    }

    public function tunggakan()
    {
    	$data = Tagihan::where('status','=','2')->get();
    	return view('admindashboard.tunggakan',compact('data'));
    }
}
