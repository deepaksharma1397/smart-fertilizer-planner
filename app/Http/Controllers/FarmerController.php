<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index(Request $request)
{
    $search = $request->search;

    $farmers = Farmer::when($search, function ($query, $search) {

        $query->where('name', 'like', "%{$search}%")
              ->orWhere('village', 'like', "%{$search}%");

    })->get();

    return view('farmers.index', compact('farmers', 'search'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('farmers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'village' => 'required',
        'land_size' => 'required'
    ]);

    Farmer::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'village' => $request->village,
        'land_size' => $request->land_size
    ]);

    return redirect('/farmers')
            ->with('success', 'Farmer added successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(Farmer $farmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $farmer = Farmer::find($id);

    return view('farmers.edit', compact('farmer'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'village' => 'required',
        'land_size' => 'required'
    ]);

    $farmer = Farmer::find($id);

    $farmer->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'village' => $request->village,
        'land_size' => $request->land_size
    ]);

    return redirect('/farmers')
            ->with('success', 'Farmer updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    $farmer = Farmer::find($id);

    $farmer->delete();

    return redirect('/farmers');
}
}
