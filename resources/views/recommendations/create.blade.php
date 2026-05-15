<!DOCTYPE html>
<html>
<head>
    <title>Fertilizer Recommendation</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold text-green-700">
            Fertilizer Recommendation
        </h1>

        <a href="/recommendations"
           class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
           View Recommendations
        </a>

    </div>

    @if($errors->any())

        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form action="/recommendations" method="POST">

        @csrf

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Farmer Name</label>

            <input type="text" name="farmer_name"
                   class="w-full border border-gray-300 rounded p-3">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Crop Type</label>

            <input type="text" name="crop_type"
                   class="w-full border border-gray-300 rounded p-3">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Soil Type</label>

            <input type="text" name="soil_type"
                   class="w-full border border-gray-300 rounded p-3">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Nitrogen Level</label>

            <input type="number" name="nitrogen"
                   class="w-full border border-gray-300 rounded p-3">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">Phosphorus Level</label>

            <input type="number" name="phosphorus"
                   class="w-full border border-gray-300 rounded p-3">
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold">Potassium Level</label>

            <input type="number" name="potassium"
                   class="w-full border border-gray-300 rounded p-3">
        </div>

        <button type="submit"
                class="bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700">
                Generate Recommendation
        </button>

    </form>

</div>

</body>
</html>