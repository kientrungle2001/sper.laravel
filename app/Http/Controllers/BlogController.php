<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    //
    public function index(Request $request, Response $response) {
        return view('frontend.blog.index');
    }

    public function detail(Request $request, Response $response) {
        return view('frontend.blog.detail');
    }
}
