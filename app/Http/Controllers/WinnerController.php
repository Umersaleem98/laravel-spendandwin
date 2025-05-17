<?php

namespace App\Http\Controllers;

use App\Models\Winner;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    public function index()
    {
        $winners = Winner::all();
        return view('adminlayouts.pages.winner', compact('winners'));
    }
}
