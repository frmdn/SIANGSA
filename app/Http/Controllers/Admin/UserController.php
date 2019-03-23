<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Tagihan;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	$data = User::where('status','=','1')->get();
    	return view('admindashboard.showuser', compact('data'));
    }

    public function show($id)
    {
    	$data = User::findOrFail($id);
    	return view('admindashboard.edituser',compact('data'));
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function update(Request $request)
    {
    	$data = [
    		'name' => $request->input('name'),
    		'email' => $request->input('email'),
    		'phone' => $request->input('phone'),
    		'address' => $request->input('address'),
    		'jumlah_anggota' => $request->input('jumlah_anggota'),
    		'layanan_id' => $request->input('layanan_id'),
    	];

    	DB::table('users')->where('id', $request->input('id'))->update($data);
      return redirect()->intended(route('adminshowuser'));
  }

  public function newuser()
  {
    $data = User::where('status','=','0')->get();
    return view('admindashboard.shownewuser', compact('data'));
}

public function aktifasi($id)
{
    $data = User::findOrFail($id);
    $qty = $data->qty;
    $layanan = $data->layanan_id;
    $nominal = 0;
    if ($layanan == "1") {
        if ($qty <= 5) {
            $nominal = 35000;
        } else if (5 < $qty and $qty <= 10) {
            $nominal = 55000;
        } else {
            $nominal = 85000;
        }
    } else {
        if ($qty <= 0.5) {
            $nominal = 500000;
        } else if (0.5 < $qty and $qty <= 0.75) {
            $nominal = 800000;
        } else {
            $nominal = 1200000;
        }
    }

    $data['nominal'] = $nominal;
    return view('admindashboard.aktifasi',compact('data'));
}

public function activate(Request $request)
{
    $data = [
        'status' => "1"
    ];

    DB::table('users')->where('id', $request->input('id'))->update($data);

    $t = new Tagihan;
    $t->user_id = $request->input('user_id');
    $t->nominal = $request->input('nominal');
    $t->status = "0";
    $t->jatuhtempo = $request->input('jatuhtempo');
    $t->save();

    return redirect()->intended(route('adminshowuser'));
}
}
