<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    // Method to display the form for creating a new delivery
    public function create()
    {
        return view('deliveries.create1'); // Returns the view for creating a new delivery
    }

    // Method to store the new delivery in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'order_id' => 'required|integer',
            'delivery_status' => 'required|string|max:255',
        ]);

        // Create a new delivery with the request data
        Delivery::create($request->all());

        // Redirect to the deliveries index with a success message
        return redirect()->route('deliveries.index1')->with('success', 'Delivery created successfully.');
    }

    // Method to display all deliveries (index)
    public function index()
    {
        $deliveries = Delivery::all();
        return view('deliveries.index1', compact('deliveries'));
    }
}
