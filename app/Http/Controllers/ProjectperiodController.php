<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projectperiod;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProjectperiodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->id();
        $period = Projectperiod::where('user_id', $user_id)->get();
        return view('projectperiod.index', compact('period'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        // Validate the request for arrays of 'lower', 'higher', and 'period'
        $validated = $request->validate([
            'lower' => 'required|array',
            'higher' => 'required|array',
            'period' => 'required|array',
        ]);

        $user_id = auth()->id();

        if (!$user_id) {
            return redirect()->route('period.index')->with('error', 'User not found.');
        }

        // Loop through each set of values and store them
        foreach ($validated['lower'] as $key => $lower) {
            // Check if a record with the same 'lower', 'higher', 'period', and 'user_id' already exists
            $existingPeriod = Projectperiod::where('lower', $lower)
                ->where('higher', $validated['higher'][$key])
                ->where('period', $validated['period'][$key])
                ->where('user_id', $user_id)
                ->first();

            if (!$existingPeriod) {
                // Create a new record if it doesn't exist
                Projectperiod::create([
                    'user_id' => $user_id,
                    'lower' => $lower,
                    'higher' => $validated['higher'][$key],
                    'period' => $validated['period'][$key],
                ]);
            }
        }

        return redirect()->route('period.index')->with('flash_message', 'Project Period Managed!');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the period by ID
        $period = Projectperiod::find($id);

        if ($period) {
            // Delete the period
            $period->delete();

            // Optionally, return a JSON response indicating success
            return response()->json(['message' => 'Period deleted successfully'], 200);
        } else {
            // Return an error response if the period is not found
            return response()->json(['message' => 'Period not found'], 404);
        }
    }


}
