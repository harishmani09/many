<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignatureController extends Controller
{
    public function index()
    {
        return view('utilities.signature');
    }
    public function store(Request $request)
    {
        // dd($request);
    }
}
