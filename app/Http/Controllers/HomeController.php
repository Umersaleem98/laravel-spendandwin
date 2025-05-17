<?php

namespace App\Http\Controllers;

use App\Models\Winner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $winners = Winner::all();
        return view('welcome', compact('winners'));
    }
   
    public function reg()
    {
        return view('pages.register');
    }
}
