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

    // Custom file upload logic (saving to public/uploads/Oneyear-proof)
    if ($request->hasFile('payment_screenshot')) {
        $file = $request->file('payment_screenshot');
        $filename = time() . '_' . $file->getClientOriginalName();
        $destination = public_path('uploads/Oneyear-proof');
        
        // Create folder if not exists
        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }

        $file->move($destination, $filename);

        // Save relative path to database (e.g., 'uploads/Oneyear-proof/filename.jpg')
        $register->payment_screenshot = 'uploads/Oneyear-proof/' . $filename;
    }

    $register->save();

    return back()->with('success', 'The user is registered successfully.');
}

}
