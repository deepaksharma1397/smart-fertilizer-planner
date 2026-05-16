<!DOCTYPE html>
<html>
<head>
    <title>Smart Fertilizer Planner</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <!-- Navbar -->

    <nav class="bg-green-700 text-white shadow">

        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold">
                Smart Fertilizer Planner
            </h1>

            <div class="flex gap-4">

                <a href="/"
                   class="hover:text-yellow-300">
                   Dashboard
                </a>

                <a href="/farmers"
                   class="hover:text-yellow-300">
                   Farmers
                </a>

                <a href="/recommendations"
                   class="hover:text-yellow-300">
                   Recommendations
                </a>

                <a href="/farmers/create"
                   class="hover:text-yellow-300">
                   Add Farmer
                </a>

                <a href="/recommendations/create"
                   class="hover:text-yellow-300">
                   New Recommendation
                </a>

            </div>

        </div>

    </nav>

    <!-- Page Content -->

    <div class="p-6">

        @yield('content')

    </div>

</body>
</html>