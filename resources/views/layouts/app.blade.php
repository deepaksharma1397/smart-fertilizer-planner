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

   <nav class="bg-black/40 backdrop-blur-xl text-white p-4 shadow-2xl border-b border-green-400/20">

        <div class="max-w-7xl mx-auto flex justify-between items-center">

            <h1 class="text-2xl font-bold">
                Smart Fertilizer Planner
            </h1>

            <div class="flex gap-4 items-center">

                <a href="/"
                   class="hover:text-green-300 transition duration-300">
                   Dashboard
                </a>

                <a href="/farmers"
                   class="hover:text-green-300 transition duration-300">
                   Farmers
                </a>

                <a href="/recommendations"
                   class="hover:text-green-300 transition duration-300">
                   Recommendations
                </a>

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button type="submit"
                            class="bg-red-600 hover:bg-red-700 transition duration-300 px-3 py-1 rounded hover:bg-red-600">

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