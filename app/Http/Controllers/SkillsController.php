<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller
{
    public function index()
    {
        $user_id = auth()->id();
        $skills = Skills::where('user_id', $user_id)->get();
        // dd($skills);
        return view('skills.index', compact('skills'));
    }


    public function fetchSkills()
    {
        $jobs = Helper::fetchAndStoreSkills();

        // Log the response to verify the structure
        Log::info('Fetched Skills:', ['jobs' => $jobs]);

        // Ensure the response is an array before proceeding
        if (is_array($jobs)) {
            foreach ($jobs as $job) {
                Skills::create([
                    'name' => $job['name'], 
                    'user_id'=>auth()->id() // Ensure API returns 'name' key
                ]);
            }
            return redirect()->route('skills.index')->with('message', 'Skills fetched and stored successfully.');
        } else {
            Log::error('Failed to fetch skills: Response was not an array.', ['response' => $jobs]);
            return redirect()->route('skills.index')->with('error', 'Failed to fetch skills: Invalid API response.');
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skillsets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user_id = auth()->id();

        // Check if `name` is a JSON string with multiple skills
        $skills = json_decode($validated['name']);

        if (is_array($skills)) {
            foreach ($skills as $skill) {
                Skills::create([
                    'name' => $skill->value,
                    'user_id' => $user_id,
                ]);
            }
        } else {
            // If it's just a simple string (e.g., "PHP")
            Skills::create([
                'name' => $validated['name'],
                'user_id' => $user->id,
            ]);
        }

        return redirect()->route('skills.index')->with('flash_message', 'Skills saved successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //     $skill = Skills::find($id);
        //     return view('skillsets.show')->with('skill', $skill);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skill = Skills::find($id);
        return view('skillsets.edit')->with('skill', $skill);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skill = Skills::find($id);
        $input = $request->all();
        $skill->update($input);
        return redirect()
            ->route('skill.index', ['id' => $id])
            ->with('flash_message', 'skill Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skills::destroy($id);
        return redirect()->route('skill.index')->with('flash_message', 'skill deleted');
    }
}

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Skills;
// use App\Helper\Helper;
// use Illuminate\Support\Facades\Auth;

// class SkillsController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $skills = Skills::all(); // Fetch all skills from the database
//         return view('skills.index', compact('skills'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      */

//      public function fetchSkills()
//      {
//          // Get the authenticated user's access token
//          $user = Auth::user();
//          $access_token = $user->freelancer_access_token;

//          // Use the helper to fetch and store skills
//          Helper::fetchAndStoreSkills($access_token);
// //  dd($access_token);
//          // Redirect back to the skills index page with a success message
//          return redirect()->route('skills.index')->with('success', 'Skills synchronized successfully!');
//      }

//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         // Validate the request, ensuring 'skills' is a valid JSON string
//         $validated = $request->validate([
//             'name' => 'required|string',
//         ]);

//         // Decode the skills JSON
//         $skills = json_decode($validated['skills'], true);

//         // If decoding fails, return an error response
//         if (is_null($skills)) {
//             return redirect()->route('skills.index')->with('error', 'Invalid skills data');
//         }

//         // Initialize an array to store skill names
//         $skill_array = [];

//         // Iterate over the decoded skills array and extract the names
//         foreach ($skills as $skill) {
//             if (isset($skill['name'])) {
//                 // Collect the skill name
//                 $skill_array[] = $skill['name'];
//             }
//         }

//         // If no valid skills were found, return an error message
//         if (empty($skill_array)) {
//             return redirect()->route('skills.index')->with('error', 'No valid skills found');
//         }

//         // Convert the array of skill names into a comma-separated string
//         $all_skills = implode(", ", $skill_array);

//         // Prepare data to store (saving all skill names in the 'name' column)
//         $skill_data = [
//             'name' => $all_skills,   // Save all skills as a single string in 'name' column
//             'user_id' => Auth::id(), // Set the user_id to the current authenticated user
//         ];

//         try {
//             // Store the data in the database
//             Skills::create($skill_data);
//         } catch (\Exception $e) {
//             // Log or handle the exception and return an error response if needed
//             return redirect()->route('skills.index')->with('error', 'Failed to store skills: ' . $e->getMessage());
//         }

//         // Return with a success message after storing the skills
//         return redirect()->route('skills.index')->with('success', 'Skills added successfully!');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         //
//     }
// }
