<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VideoController extends Controller
{
    //
    public function index(Request $request, Response $response)
    {
        return view('frontend.video.index');
    }

    public function detail(Request $request, Response $response)
    {
        return view('frontend.video.detail');
    }
}
