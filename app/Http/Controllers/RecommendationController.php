<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recommendation;

class RecommendationController extends Controller
{
    public function create()
    {
        return view('recommendations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'farmer_name' => 'required',
            'crop_type' => 'required',
            'soil_type' => 'required',
            'nitrogen' => 'required|integer',
            'phosphorus' => 'required|integer',
            'potassium' => 'required|integer',
        ]);

        $fertilizer = '';

        if ($request->nitrogen < 50) {
            $fertilizer = 'Urea';
        }
        elseif ($request->phosphorus < 50) {
            $fertilizer = 'DAP';
        }
        elseif ($request->potassium < 50) {
            $fertilizer = 'Potash';
        }
        else {
            $fertilizer = 'NPK Balanced Fertilizer';
        }

        Recommendation::create([
            'farmer_name' => $request->farmer_name,
            'crop_type' => $request->crop_type,
            'soil_type' => $request->soil_type,
            'nitrogen' => $request->nitrogen,
            'phosphorus' => $request->phosphorus,
            'potassium' => $request->potassium,
            'recommended_fertilizer' => $fertilizer,
        ]);

        return redirect('/recommendations')
                ->with('success', 'Fertilizer recommendation generated successfully!');
    }

    public function index()
    {
        $recommendations = Recommendation::all();

        return view('recommendations.index', compact('recommendations'));
    }
}