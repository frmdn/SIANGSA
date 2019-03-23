<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$data = Blog::get();
    	return view('admindashboard.blog',compact('data'));
    }

    public function create()
    {
    	return view('admindashboard.post');
    }

    public function store(Request $request)
    {
        $q = new Blog;
        $q->title = $request->input('title');
        $q->description = $request->input('description');
        $q->user_id = "1";
        $q->save();

        return redirect()->intended(route('adminblog'));
    }
}
