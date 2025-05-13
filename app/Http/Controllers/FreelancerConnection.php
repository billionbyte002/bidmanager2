<?php
 
 namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
 use App\Models\User;
 
 class FreelancerConnection extends Controller
 {
     /**
      * Display a listing of the resource.
      */
     public function index()
     {
         return view('pages.freelancer-connection');
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
         // Validate the request
         $request->validate([
             'freelancer_token' => 'required|string',
         ]);
 
         // Get the submitted token
         $freelancer_token = $request->input('freelancer_token');
 
         // Save the token using the helper service
         $base_url = env('FREELANCER_API_URL');
 
         // Fetch data from Freelancer API
         $apiUrl = $base_url . 'users/0.1/self/?jobs=true';
         $response = $this->fetchFreelancerData($apiUrl, $freelancer_token);
 
         if ($response['success']) {
             $apiData = $response['data']; // Ensure $apiData is set
 
             $freelancer_id = $apiData['result']['id'] ?? null;
             if (isset($freelancer_id)) {
                 $freelancer_username = $apiData['result']['username'] ?? null;
                 $user = Auth::user();
                 $user_id = auth()->user()->id;   
                 $user = User::find($user_id);
                 $user->freelancer_access_token = $freelancer_token;
                 $user->freelancer_id = $freelancer_id;
                 $user->freelancer_username = $freelancer_username;
                 $user->save();
 
                 return redirect()->route('dashboard2')->with('success', 'Freelancer account connected successfully!')->with('apiData', $apiData);
             }
             dd($freelancer_token, $freelancer_id, $freelancer_username);
         }
 
         // Handle the case where $response['success'] is false or $freelancer_id is not set
         $errorMessage = $response['message'] ?? 'Failed to connect to Freelancer API. Please check your token.';
         return redirect()->back()->withErrors(['message' => $errorMessage]);
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
     private function fetchFreelancerData($url, $token)
     {
         try {
             $client = new \GuzzleHttp\Client();
 
             $response = $client->get($url, [
                 'headers' => [
                     'Authorization' => 'Bearer ' . $token,
                     'Accept' => 'application/json',
                 ],
             ]);
 
             $responseBody = json_decode($response->getBody(), true);
 
             return [
                 'success' => true,
                 'data' => $responseBody,
             ];
         } catch (\Exception $e) {
             return [
                 'success' => false,
                 'message' => $e->getMessage(),
             ];
         }
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function destroy(string $id)
     {
         //
     }
 }