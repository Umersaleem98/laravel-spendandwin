<?php

namespace App\Http\Controllers;

use App\Models\PaymentSubmission;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function index()
    {
       
        return view('pages.register');
    }


    public function create(Request $request)
{
    $register = new PaymentSubmission;
    $register->name = $request->name;
    $register->email = $request->email;
    $register->phone = $request->phone;

    if ($request->hasFile('payment_screenshot')) {
        $file = $request->file('payment_screenshot');
        $filename = time() . '_' . $file->getClientOriginalName();
        $destination = public_path('uploads/Oneyear-proof');

        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }

        $file->move($destination, $filename);

        // Save only the filename (not the full path)
        $register->payment_screenshot = $filename;
    }

    $register->save();

    return back()->with('success', 'The user is registered successfully.');
}

}
