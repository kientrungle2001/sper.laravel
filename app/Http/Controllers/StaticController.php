<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StaticController extends Controller
{
    //
    public function introduction(Request $request, Response $response) {
        return view('frontend.static.introduction');
    }
}
