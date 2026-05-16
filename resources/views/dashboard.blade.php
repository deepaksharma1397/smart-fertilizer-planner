@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto mt-10">

    <h1 class="text-4xl font-bold text-center text-green-700 mb-10">
        Smart Fertilizer Planner Dashboard
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">

        <div class="bg-white p-8 rounded-xl shadow text-center">

            <h2 class="text-2xl font-bold text-green-600 mb-2">
                Total Farmers
            </h2>

            <p class="text-5xl font-bold">
                {{ $totalFarmers }}
            </p>

        </div>

        <div class="bg-white p-8 rounded-xl shadow text-center">

            <h2 class="text-2xl font-bold text-blue-600 mb-2">
                Total Recommendations
            </h2>

            <p class="text-5xl font-bold">
                {{ $totalRecommendations }}
            </p>

        </div>

    </div>

    <div class="bg-white p-10 rounded-xl shadow">

        <h2 class="text-2xl font-bold mb-6 text-center">
            Quick Navigation
        </h2>

        <div class="flex flex-wrap justify-center gap-4">

            <a href="/farmers"
               class="bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700">
               Manage Farmers
            </a>

            <a href="/farmers/create"
               class="bg-green-500 text-white px-6 py-3 rounded hover:bg-green-600">
               Add Farmer
            </a>

            <a href="/recommendations"
               class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">
               View Recommendations
            </a>

            <a href="/recommendations/create"
               class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600">
               New Recommendation
            </a>

        </div>

    </div>

</div>

@endsection