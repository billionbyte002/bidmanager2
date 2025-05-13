<?php

namespace App\Http\Controllers;
use App\Models\Country;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function manageExcludedCountries()
    {
        // Fetch the list of countries from the database or an API
        $countries = Country::all(); // Assuming you have a Country model

        // Pass the countries data to the view
        return view('countries.index', compact('countries'));
    }

    public function updateCountires(Request $request)
    {
        $user = auth()->user();
        $excluded = $request->input('excluded_country_ids', []);
        $user->excluded_country_ids = implode(',', $excluded);
        $user->save();
        return response()->json(['status' => 'success', 'saved' => $excluded]);
    }
}
