<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
    	$data = Blog::latest()->get();
        $judul = "Info";
    	return view('webpage.blog', compact('data','judul'));
    }

    public function show($id)
    {
    	$data = Blog::find($id);
    	return view('webpage.post', compact('data'));
    }

    public function info() 
    {
        $data = Blog::latest()->get();
        $judul = "Info";
        return view('userdashboard.info', compact('data','judul'));
    }
}
