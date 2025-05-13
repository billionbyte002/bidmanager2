<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TemplateCat;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TemplateCatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->id();
        $templatecat = TemplateCat::where('user_id', $user_id)->get();
        return view('templatecat.index', compact('templatecat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('templatecat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'include' => 'required|string|in:Yes,No|max:255',
        ]);

        $user_id = auth()->id();

        if (!$user_id) {
            return redirect()->route('templatecat.index')->with('error', 'User not found.');
        }

        // Add user_id to the validated data
        $validated['user_id'] = $user_id;

        // Store the new template category
        TemplateCat::create($validated);

        return redirect()->route('templatecat.index')->with('flash_message', 'Template Category Added!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $templatecat = TemplateCat::find($id);
        
        // return view('templatecat.show')->with('templatecat', $templatecat);
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(string $id)
    {
        $templatecat = TemplateCat::findOrFail($id);
        return view('templatecat.edit', compact('templatecat'));
    }

    public function update(Request $request, string $id)
    {
        $templatecat = TemplateCat::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'include' => 'required|string|in:Yes,No|max:255',
        ]);

        $templatecat->update($validated);

        return redirect()->route('templatecat.index')->with('flash_message', 'Template Category updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user_id = auth()->id();
        $templatecat = TemplateCat::where('id', $id)->where('user_id', $user_id)->first();

        if (!$templatecat) {
            return redirect()->route('templatecat.index')->with('error', 'Template Category not found or unauthorized.');
        }

        $templatecat->delete();

        return redirect()->route('templatecat.index')->with('flash_message', 'Template Category deleted successfully.');
    }

    public function updatePosition(Request $request)
    {
        $positions = $request->positions;

        foreach ($positions as $key => $id) {
            TemplateCat::where('id', $id)->update(['position' => $key]);
        }

        return response()->json(['status' => 'success']);
    }
}
