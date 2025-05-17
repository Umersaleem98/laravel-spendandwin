<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\PaymentSubmission;
// use Illuminate\Http\Request;

class AuthController extends Controller
{

 public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle Register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Uses the hashed cast too
        ]);

        return redirect()->route('login')->with('success', 'Registered successfully! Please log in.');
    }


// Show Login Form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // or any protected route
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    // Handle Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


    // applicant register 


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
