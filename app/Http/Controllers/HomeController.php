<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function penggunaan_layout(){
        return view('home.penggunaan_layout');
    }

    public function index(){
        return view('layouts.index');
    }
}
