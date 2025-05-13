<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClientStats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClientStatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->id();
        $clients = ClientStats::where('user_id', $user_id)->get();

        return view('clientstat.index', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'payment' => 'required|string|in:Does not matter,Yes, verified only|max:255',
            'email' => 'required|string|in:Does not matter,Yes, verified only|max:255',
            'deposit' => 'required|string|in:Does not matter,Yes, verified only|max:255',
            'rating' => 'required|string|in:Does not matter,Atleast 1 star,Atleast 2 star,Atleast 3 star,Atleast 4 star,Atleast 5 star|max:255',
            'project' => 'required|integer|min:0|max:100000',
        ]);

        $user_id = auth()->id();

        if (!$user_id) {
            return redirect()->route('client.index')->with('error', 'User not authenticated.');
        }

        Log::info('Validated Client Stats: ', $validated);

        // Check if this exact config already exists for the user
        $exists = ClientStats::where('user_id', $user_id)
            ->where('payment', $validated['payment'])
            ->where('email', $validated['email'])
            ->where('deposit', $validated['deposit'])
            ->where('rating', $validated['rating'])
            ->where('project', $validated['project'])
            ->first();

        if ($exists) {
            return redirect()->back()->withErrors('This client configuration already exists!');
        }

        // Create new entry with user_id
        ClientStats::create([
            'user_id' => $user_id,
            ...$validated
        ]);

        return redirect()->route('client.index')->with('flash_message', 'Client Stats Added Successfully!');
    }

}
