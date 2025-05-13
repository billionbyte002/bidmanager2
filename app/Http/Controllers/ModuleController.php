<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::all();
        return view('module.index',compact('modules'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Module::create([
            'name' => $request->name,
            'display_name' => $request->display_name
        ]);
        
        return redirect('/module');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $module = Module::with('permissions')->where('id', $id)->first();
        
        return view('auth.user.module.show',compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $module = Module::with('permissions')->where('id', $id)->first();
       
       return view('auth.user.module.edit',compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        
        $module = Module::where('id', $id)->first();
        
        $module->name = $request->name;
        $module->display_name = $request->display_name;
        $module->save();
         
        $permissions = $request->input_array_name;
        
        //Delete previous record  in  permissions table
        Permission::where('module_id', $id)->delete();
        
        foreach (range(1, sizeOf($permissions)) as $index)
        {
            if(!empty($permissions[$index - 1])){
            Permission::create([
                'module_id' => $id,
                'name' => $permissions[$index - 1],
                'display_name' => $request->input_array_display_name[$index - 1]
            ]);
            }
        }
         
         return redirect('/module');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
