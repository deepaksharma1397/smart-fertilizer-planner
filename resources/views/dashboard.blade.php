@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto">

    <h1 class="text-4xl font-bold text-green-700 mb-8">
        Smart Fertilizer Planner Dashboard
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">

        <div class="bg-white/15 backdrop-blur-xl border border-white/20 shadow-2xl backdrop-blur-xl border border-white/20 text-green-200 p-6 rounded-xl shadow">

            <h2 class="text-xl font-bold text-green-700 mb-3">
                Total Farmers
            </h2>

            <p class="text-4xl font-bold">
                {{ $totalFarmers }}
            </p>

        </div>

        <div class="bg-white/15 backdrop-blur-xl border border-white/20 shadow-2xl backdrop-blur-xl border border-white/20 text-blue-200 p-6 rounded-xl shadow">

            <h2 class="text-xl font-bold text-blue-700 mb-3">
                Total Recommendations
            </h2>

            <p class="text-4xl font-bold">
                {{ $totalRecommendations }}
            </p>

        </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">

        <div class="bg-white/15 backdrop-blur-xl border border-white/20 shadow-2xl backdrop-blur-xl border border-white/20 text-gray-100 p-6 rounded-xl shadow">

            <h2 class="text-xl font-bold text-green-700 mb-3">
                Latest Farmer Added
            </h2>

            @if($latestFarmer)

                <p>
                    <strong>Name:</strong>
                    {{ $latestFarmer->name }}
                </p>

                <p>
                    <strong>Village:</strong>
                    {{ $latestFarmer->village }}
                </p>

            @else

                <p>No farmers added yet.</p>

            @endif

        </div>

        <div class="bg-white/15 backdrop-blur-xl border border-white/20 shadow-2xl backdrop-blur-xl border border-white/20 text-gray-100 p-6 rounded-xl shadow">

            <h2 class="text-xl font-bold text-blue-700 mb-3">
                Latest Recommendation
            </h2>

            @if($latestRecommendation)

                <p>
                    <strong>Farmer:</strong>
                    {{ $latestRecommendation->farmer_name }}
                </p>

                <p>
                    <strong>Recommendation:</strong>
                    {{ $latestRecommendation->recommended_fertilizer }}
                </p>

            @else

                <p>No recommendations yet.</p>

            @endif

        </div>

    </div>

    <div class="bg-white/15 backdrop-blur-xl border border-white/20 shadow-2xls backdrop-blur-xl border border-white/20 text-gray-100 p-10 rounded-xl shadow">

        <h2 class="text-2xl font-bold mb-6 text-gray-700">
            Quick Navigation
        </h2>

        <div class="flex flex-wrap gap-4">

            <a href="/farmers"
               class="bg-green-600 text-gray-100 px-6 py-3 rounded hover:bg-green-700">

               Manage Farmers

            </a>

            <a href="/recommendations"
               class="bg-blue-600 text-gray-100 px-6 py-3 rounded hover:bg-blue-700">

               View Recommendations

            </a>

            <a href="/recommendations/create"
               class="bg-purple-600 text-gray-100 px-6 py-3 rounded hover:bg-purple-700">

               New Recommendation

            </a>

        </div>

    </div>

</div>

@endsection