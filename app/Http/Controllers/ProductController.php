<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('Products.index');
    }
    public function create()
    {
        return view('Products.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}
