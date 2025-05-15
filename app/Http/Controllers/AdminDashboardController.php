<?php

namespace App\Http\Controllers;

use App\Models\PaymentSubmission;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{

public function index()
{
    $totalRegistrations = PaymentSubmission::count();

    return view('dashboard', compact('totalRegistrations'));
}

}
