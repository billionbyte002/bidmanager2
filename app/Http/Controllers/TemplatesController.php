<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Templates;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\TemplateCat;
use App\Models\Skills;
use App\Models\SkillSets;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->id();
        $templates = Templates::where('user_id', $user_id)->get();
        $templatecats = TemplateCat::all();
        $skills = Skills::all();

        // dd($templatecats);
        return view('templates.index', compact('templates', 'skills', 'templatecats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $templates = Templates::all();
        $templatecats = TemplateCat::all();
        $skills = Skills::all();
        $skillsets = SkillSets::all();
        return view('templates.create', compact('templatecats', 'skills', 'skillsets'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request (ensure skills are optional)
        $request->validate([
            'category' => 'required|string',
            'content' => 'required|string',
            'skills' => 'nullable|array',  // The skills array is optional
        ]);

        // Get the selected skills (if any)
        $selectedSkills = $request->input('skills', []);  // Default to an empty array if no skills selected

        // Convert the array of skills into a string (e.g., comma-separated)
        $skillsString = implode(', ', $selectedSkills);

        // Get the logged in user's ID
        $user_id = auth()->id();

        if (!$user_id) {
            return redirect()->route('templates.index')->with('error', 'User not found.');
        }

        // Store the template with skills and user_id in the database
        $template = new Templates([
            'user_id' => $user_id, // ✅ associate with user
            'category' => $request->input('category'),
            'content' => $request->input('content'),
            'skills' => $skillsString,  // Store skills as a comma-separated string
        ]);

        $template->save();

        // Redirect or return a response
        return redirect()->route('templates.index')->with('success', 'Template created successfully.');
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
        $templates = Templates::findOrFail($id); // Find the template by ID or throw a 404
        $templatecats = TemplateCat::all(); // Fetch all template categories
        $skills = Skills::all(); // Fetch all skills
        $skillsets = SkillSets::all(); // Fetch all skillsets

        // Convert stored skills from a string to an array for the checkbox selection
        $selectedSkills = explode(',', $templates->skills); 

        return view('templates.edit', compact('templates', 'templatecats', 'skills', 'skillsets', 'selectedSkills'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request
        $request->validate([
            'category' => 'required|string',
            'content' => 'required|string',
            'skills' => 'nullable|array',  // The skills array is optional
        ]);

        // Get the template to be updated
        $templates = Templates::findOrFail($id);

        // Get the selected skills (if any)
        $selectedSkills = $request->input('skills', []);  // Default to an empty array if no skills are selected

        // Convert the array of skills into a comma-separated string
        $skillsString = implode(', ', $selectedSkills);

        // Update the template with the new data
        $templates->update([
            'category' => $request->input('category'),
            'content' => $request->input('content'),
            'skills' => $skillsString,  // Store the skills as a comma-separated string
        ]);

        // Redirect with a success message
        return redirect()->route('templates.index')->with('success', 'Template updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Templates::destroy($id);
        return redirect()->route('templates.index')->with('flash_message','Template Category deleted');
    }

    

}
