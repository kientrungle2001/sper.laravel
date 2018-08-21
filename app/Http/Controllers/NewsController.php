<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller
{
    //
    public function index(Request $request, Response $response) {
        return view('frontend.news.index');
    }

    public function detail(Request $request, Response $response) {
        return view('frontend.news.detail');
    }
}
