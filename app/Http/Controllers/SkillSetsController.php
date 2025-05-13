<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkillSets;
use App\Models\Skills;
use App\Helper\Helper;
use Illuminate\Support\Facades\Auth;


class SkillSetsController extends Controller
{

    public function index()
    {
        $user_id = auth()->id();
        $skills = SkillSets::where('user_id', $user_id)->get();
        // dd($skills);
        return view('skillsets.index', compact('skills'));
    }


    public function fetchSkills()
    {
        // Get the authenticated user's access token
        $user = Auth::user();
        $access_token = $user->freelancer_access_token;

        // Use the helper to fetch and store skills
        Helper::fetchAndStoreSkills($access_token);

        // Redirect back to the skills index page with a success message
        return redirect()->route('skillsets.index')->with('success', 'Skills synchronized successfully!');
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Skills::all(); // Fetch all skills from the database
        return view('skillsets.create', compact('skills')); 
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skills' => 'required|string|max:255',
        ]);

        $user_id = auth()->id();

        if (!$user_id) {
            return redirect()->route('skillsets.index')->with('error', 'User not found.');
        }

        // Decode skills from JSON and prepare comma-separated values
        $skills = json_decode($validated['skills']);
        
        $skill_array = [];
        foreach($skills as $skill) {
            $skill_array[] = $skill->name;
        }
        $validated['skills'] = implode(", ", $skill_array);

        // Add user_id to the validated data
        $validated['user_id'] = $user_id;

        // Create the record
        SkillSets::create($validated);

        return redirect()->route('skillsets.index')->with('flash_message', 'Skill Added!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
     {
    //     $skill = SkillSets::find($id);
    //     return view('skillsets.show')->with('skill', $skill);
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skill = SkillSets::find($id);
        return view('skillsets.edit')->with('skill', $skill);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skill = SkillSets::find($id);
        $input = $request->all();
        $skill->update($input);
        return redirect()->route('skillsets.index', ['id' => $id])->with('flash_message', 'skill Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SkillSets::destroy($id);
        return redirect()->route('skillsets.index')->with('flash_message','skill deleted');
    }

    
}
