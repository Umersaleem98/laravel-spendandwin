<?php

namespace App\Http\Controllers;

use App\Models\PaymentSubmission;
use Illuminate\Http\Request;

class AdminParticipantController extends Controller
{
    public function index()
    {
        $record = PaymentSubmission::all();

        return view('adminlayouts.pages.registerusers', compact('record'));
    }


    public function Delete($id)
    {
        $record = PaymentSubmission::find($id);

        $record->delete();

        return back()->with('success', 'the user is delete successfully');
    }
}
