<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Laporan;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['index']]);
    }

    public function index()
    {
        $data = Laporan::get();
    	return response($data);
    }

    public function create(Request $request)
    {
    	$data = new Laporan;
    	$data->user_id = $request->input('user_id');
    	$data->jenis = $request->input('jenis');
    	$data->catatan = $request->input('catatan');
    	$data->save();

        $response = [
                'msg' => 'laporan created',
            ];
	   return response()->json($response);
    }
}
