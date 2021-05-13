<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->input('products'));
        dd($request->all());
    }
    public function show()
    {
        return view('form');
    }
}
