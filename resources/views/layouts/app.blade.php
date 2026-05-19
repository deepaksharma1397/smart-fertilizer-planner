<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Smart Fertilizer Planner</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="min-h-screen bg-cover bg-center bg-fixed text-white"
    style="background-image:
    linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
    url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=2070');">

    <nav class="bg-black/30 backdrop-blur-lg text-white p-4 shadow-xl border-b border-white/20">

        <div class="max-w-7xl mx-auto flex justify-between items-center">

            <h1 class="text-2xl font-bold">
                Smart Fertilizer Planner
            </h1>

            <div class="flex gap-4 items-center">

                <a href="/"
                   class="hover:text-gray-200">
                   Dashboard
                </a>

                <a href="/farmers"
                   class="hover:text-gray-200">
                   Farmers
                </a>

                <a href="/recommendations"
                   class="hover:text-gray-200">
                   Recommendations
                </a>

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button type="submit"
                            class="bg-red-500 px-3 py-1 rounded hover:bg-red-600">

                        Logout

                    </button>

                </form>

            </div>

        </div>

    </nav>

    <div class="p-8 backdrop-blur-sm">

        @yield('content')

    </div>

</body>
</html>