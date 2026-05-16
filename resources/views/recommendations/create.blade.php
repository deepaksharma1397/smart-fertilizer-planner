@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold text-blue-700">
            New Fertilizer Recommendation
        </h1>

        <a href="/recommendations"
           class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
           Back
        </a>

    </div>

    <form action="/recommendations" method="POST">

        @csrf

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Farmer Name
            </label>

            <input type="text"
                   name="farmer_name"
                   class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

        </div>

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Crop Type
            </label>

            <input type="text"
                   name="crop_type"
                   class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

        </div>

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Soil Type
            </label>

            <input type="text"
                   name="soil_type"
                   class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

            <div>

                <label class="block mb-2 font-semibold">
                    Nitrogen
                </label>

                <input type="number"
                       name="nitrogen"
                       class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Phosphorus
                </label>

                <input type="number"
                       name="phosphorus"
                       class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Potassium
                </label>

                <input type="number"
                       name="potassium"
                       class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

            </div>

        </div>

        <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">

                Generate Recommendation

        </button>

    </form>

</div>

@endsection