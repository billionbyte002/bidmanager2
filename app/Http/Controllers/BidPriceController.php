<?php

namespace App\Http\Controllers;

use App\Models\BidPrice;
use Illuminate\Http\Request;

class BidPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->id();

        // Get the latest bid price for the authenticated user
        $lastBidPrice = BidPrice::where('user_id', $userId)->latest()->first();

        $lastLower = $lastBidPrice->lower ?? 100;
        $lastHigher = $lastBidPrice->higher ?? 100;

        return view('bidprice.index', compact('lastLower', 'lastHigher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lower' => 'required|numeric|min:0',
            'higher' => 'required|numeric|min:0',
        ]);

        BidPrice::create([
            'user_id' => auth()->id(),
            'lower' => $request->lower,
            'higher' => $request->higher,
        ]);

        return redirect()->route('bidprice.index')->with('message', 'Bid price saved successfully!');
    }
}
