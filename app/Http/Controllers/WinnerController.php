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

    public function Delete($id)
    {
        $winners = Winner::find($id);

        $winners->delete();

        return back()->with('success', 'the participant is delete successfully');
    }
}
