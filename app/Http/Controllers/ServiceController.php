<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServiceController extends Controller
{
    //
    public function index(Request $request, Response $response) {
        return view('frontend.service.index');
    }
}
