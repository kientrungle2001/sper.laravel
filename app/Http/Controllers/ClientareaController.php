<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientareaController extends Controller
{
    //
    public function info(Request $request) {
        return view('frontend.clientarea.info');
    }

    public function branchmanagement(Request $request) {
        return view('frontend.clientarea.branchmanagement');
    }

    public function branchservice(Request $request) {
        return view('frontend.clientarea.branchservice');
    }

    public function changepassword(Request $request) {
        return view('frontend.clientarea.changepassword');
    }

    public function collection(Request $request) {
        return view('frontend.clientarea.collection');
    }

    public function history(Request $request) {
        return view('frontend.clientarea.history');
    }

    public function createservice(Request $request) {
        return view('frontend.clientarea.createservice');
    }

    public function editservice(Request $request) {
        return view('frontend.clientarea.editservice');
    }

    public function createproduct(Request $request) {
        return view('frontend.clientarea.createproduct');
    }

    public function editproduct(Request $request) {
        return view('frontend.clientarea.editproduct');
    }

    public function feedback(Request $request) {
        return view('frontend.clientarea.feedback');
    }

    public function privilege(Request $request) {
        return view('frontend.clientarea.privilege');
    }

    public function service(Request $request) {
        return view('frontend.clientarea.service');
    }
}
