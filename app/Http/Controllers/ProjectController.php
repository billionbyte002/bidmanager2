<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->id();

        // Get the last project for the authenticated user
        $lastProject = Project::where('user_id', $userId)->latest()->first();

        $lastBudget = $lastProject->budget ?? 0;
        $lastTime = $lastProject->time ?? 0;

        return view('projectbudget.index', compact('lastBudget', 'lastTime'));
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
        $validated = $request->validate([
            'budget' => 'required|integer|min:0|max:10000000',
            'time' => 'required|integer|min:0|max:10000',
        ]);

        $user_id = auth()->id();

        if (!$user_id) {
            return redirect()->route('project.index')->with('error', 'User not authenticated.');
        }

        Project::create([
            'user_id' => $user_id,
            'budget' => $validated['budget'],
            'time' => $validated['time'],
        ]);

        return redirect()->route('project.index')->with('flash_message', 'Project Budget Added!');
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
    public function destroy(string $id)
    {
        $project = Project::where('user_id', auth()->id())->find($id);

        if ($project) {
            $project->delete();
            return response()->json(['message' => 'Project deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Project not found or unauthorized'], 404);
        }

    }
}
