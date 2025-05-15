<?php
namespace App\Http\Controllers;

use App\Models\Winner;
use App\Models\PaymentSubmission;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $totalRegistrations = PaymentSubmission::count();
        return view('dashboard', compact('totalRegistrations'));
    }

    public function announceWinner()
    {

        // Get all already selected winners
        $winnerIds = Winner::pluck('payment_submission_id')->toArray();
        // dd($winnerIds);
        // Get remaining participants (those who have not yet won)
        $remaining = PaymentSubmission::whereNotIn('id', $winnerIds)->get();

        // Check if all winners have been announced
        if ($remaining->isEmpty()) {
            return back()->with('message', 'All winners have been announced!');
        }

        // Pick one random winner from remaining participants
        $winner = $remaining->random();

        // Save the winner to the winners table
        try {
            Winner::create([
                'payment_submission_id' => $winner->id,
                'name' => $winner->name,
                'email' => $winner->email,
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while announcing the winner.');
        }

        // Return back with the winner's name
        return redirect()->back()->with('winner', $winner->name);
    }
}
