<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
    	$data = Blog::latest()->get();
    	return response($data);
    }

    public function show($id)
    {
    	$data = Blog::find($id);
    	return response($data);
    }
}
