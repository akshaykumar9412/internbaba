<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $locations = Location::all();
        return view('admin.locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.locations.AddLoction');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd("Store function is called");
        // echo "Store function is called";
        // dd($request->all());
        $request->validate([
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);
        try {
            Location::create([
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
            ]);

            return redirect()->route('locations.index')
                ->with('success', 'Location created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
        return view('admin.locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //

        return view('admin.locations.update', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        //
        // dd("Update function is called");
        // dd($request->all());
        $request->validate([
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);
        try {
            $location->update([
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
            ]);

            return redirect()->route('locations.index')
                ->with('success', 'Location Updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        //
        $location->delete();
        return redirect()->route('locations.index')
            ->with('success', 'Location deleted successfully');
    }
}
