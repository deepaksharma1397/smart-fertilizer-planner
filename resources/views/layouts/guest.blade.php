<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Smart Fertilizer Planner</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
          rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

@keyframes tractorDrive {

    0% {
        transform: translateX(-250px) scaleX(-1);
    }

    49% {
        transform: translateX(250px) scaleX(-1);
    }

    50% {
        transform: translateX(250px) scaleX(1);
    }

    99% {
        transform: translateX(-250px) scaleX(1);
    }

    100% {
        transform: translateX(-250px) scaleX(-1);
    }

}

.tractor-animation {

    animation: tractorDrive 8s linear infinite;
    display: inline-block;

}

</style>

</head>

<body
    class="font-sans text-gray-900 antialiased min-h-screen bg-cover bg-center bg-no-repeat"
    style="background-image:
    linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)),
    url('https://images.unsplash.com/photo-1500937386664-56d1dfef3854?q=80&w=2070');">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
<div class="tractor-animation text-8xl drop-shadow-lg mb-6 scale-x-[-1]">

    🚜

</div>

        <div class="w-full sm:max-w-md bg-white/20 backdrop-blur-xl p-8 rounded-3xl shadow-2xl border border-white/30 mt-6 overflow-hidden">

            {{ $slot }}

        </div>

    </div>

</body>
</html>