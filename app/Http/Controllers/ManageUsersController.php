<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Validator;
use App\Models\Country;

class ManageUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.user.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
        'email' => 'required|email:rfc,dns|string|max:255|unique:users,email',
        'password' => 'required|min:8',
        'mobile' => 'required|digits_between:10,10|numeric',
        ]);

        $validated['name'] = ucwords(mb_strtolower($validated['name'], 'UTF-8'));

        

        $user = User::create($validated);
    
        return redirect()->route('admin.user.index')->with('flash_message', 'user Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        
        return view('admin.user.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $countries = Country::all();
        return view('admin.user.edit', compact('countries'))->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect()->route('admin.user.index', ['id' => $id])->with('flash_message', 'user Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         User::destroy($id);
        return redirect()->route('admin.user.index')->with('flash_message','user deleted');
    }
}
