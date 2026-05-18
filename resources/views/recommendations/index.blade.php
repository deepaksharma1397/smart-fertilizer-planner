@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold text-blue-700">
            Fertilizer Recommendations
        </h1>

        <a href="/recommendations/create"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
           New Recommendation
        </a>

    </div>
    @if(session('success'))

    <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
        {{ session('success') }}
    </div>

@endif

    <table class="w-full border-collapse">

        <thead>

            <tr class="bg-blue-600 text-white">

                <th class="p-3 text-left">Farmer</th>
                <th class="p-3 text-left">Crop</th>
                <th class="p-3 text-left">Soil</th>
                <th class="p-3 text-left">Nitrogen</th>
                <th class="p-3 text-left">Phosphorus</th>
                <th class="p-3 text-left">Potassium</th>
                <th class="p-3 text-left">Recommended Fertilizer</th>
                <th class="p-3 text-left">Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach($recommendations as $recommendation)

            <tr class="border-b hover:bg-gray-100">

                <td class="p-3">
                    {{ $recommendation->farmer_name }}
                </td>

                <td class="p-3">
                    {{ $recommendation->crop_type }}
                </td>

                <td class="p-3">
                    {{ $recommendation->soil_type }}
                </td>

                <td class="p-3">
                    {{ $recommendation->nitrogen }}
                </td>

                <td class="p-3">
                    {{ $recommendation->phosphorus }}
                </td>

                <td class="p-3">
                    {{ $recommendation->potassium }}
                </td>

                <td class="p-3 font-bold text-green-700">
                    {{ $recommendation->recommended_fertilizer }}
                </td>
                <td class="p-3">

    <form action="/recommendations/{{ $recommendation->id }}"
          method="POST">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">

                Delete

        </button>

    </form>

</td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection