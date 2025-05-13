<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Manage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manage = Manage::all();
        return view('manage.index')->with('manage', $manage);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:manage',
        'phone' => 'required|string|max:20',
        'freelancerid' => 'required|string|max:255',
        ]);

        \Log::info($validated);

        $manage = Manage::create($validated);
    
        return redirect()->route('manage.index')->with('flash_message', 'Manage Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $manage = Manage::find($id);
        return view('manage.show')->with('manage', $manage);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manage = Manage::find($id);
        return view('manage.edit')->with('manage', $manage);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $manage = Manage::find($id);
        $input = $request->all();
        $manage->update($input);
        return redirect()->route('manage.index', ['id' => $id])->with('flash_message', 'manage Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Manage::destroy($id);
        return redirect()->route('manage.index')->with('flash_message','manage deleted');
    }
}
