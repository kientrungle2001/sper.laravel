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

    public function type(Request $request, Response $response) {
        return view('frontend.service.index-by-type');
    }

    public function realty(Request $request, Response $response) {
        return view('frontend.service.index-by-realty');
    }

    public function detail(Request $request, Response $response) {
        return view('frontend.service.detail');
    }

    public function product(Request $request, Response $response) {
        return view('frontend.service.product');
    }
}
