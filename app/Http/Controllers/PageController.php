<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function masuk()
    {
        return view('masuk');
    }
}
