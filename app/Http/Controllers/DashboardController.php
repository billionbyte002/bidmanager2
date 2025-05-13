<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Base API URL from .env or fallback
        $freelancerApiBaseUrl = env('FREELANCER_API_URL', 'https://www.freelancer-sandbox.com/api');

        // Full project API URL (for fetching active projects)
        $projectApiUrl = $freelancerApiBaseUrl . '/projects/0.1/projects/active?skills[]=3&skills[]=669&full_description=true&job_details=true';

        return view('dashboard', [
            'projectApiUrl' => $projectApiUrl,
            'freelancerApiBaseUrl' => $freelancerApiBaseUrl,
        ]);
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
        //
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
        //
    }
}
