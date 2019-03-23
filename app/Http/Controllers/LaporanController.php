<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;

class LaporanController extends Controller
{
    public function index()
    {
        $judul = "Laporan";
    	return view('userdashboard.lapor', compact('judul'));
    }

    public function create(Request $request)
    {
    	$data = new Laporan;
    	$data->user_id = $request->input('user_id');
    	$data->jenis = $request->input('customRadio');
    	$data->catatan = $request->input('catatan');
    	$data->save();
    	return redirect('home');
    }
}
