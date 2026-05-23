@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto mt-10 bg-black/30 backdrop-blur-xl border border-white/20 text-white/15 backdrop-blur-xl border border-white/20 text-white p-8 rounded-xl shadow">

    <div class="flex justify-between items-center mb-6">

    <h1 class="text-3xl font-bold text-green-700">
        Farmers List
    </h1>

    <div class="flex gap-3">

        <form action="/farmers" method="GET">

            <input type="text"
                   name="search"
                   value="{{ $search }}"
                   placeholder="Search farmer..."
                   class="border border-gray-300 rounded px-4 py-2">

            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Search
            </button>

        </form>

        <a href="/farmers/create"
           class="bg-green-700/80 text-white px-4 py-2 rounded hover:bg-green-700">
           Add Farmer
        </a>

    </div>

</div>

    @if(session('success'))

        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>

    @endif

    <table class="w-full border-collapse">

        <thead>

            <tr class="bg-green-700/80 text-white">

                <th class="p-3 text-left">Name</th>
                <th class="p-3 text-left">Phone</th>
                <th class="p-3 text-left">Village</th>
                <th class="p-3 text-left">Land Size</th>
                <th class="p-3 text-left">Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach($farmers as $farmer)

            <tr class="border-b hover:bg-white/10 transition duration-300">

                <td class="p-3">{{ $farmer->name }}</td>
                <td class="p-3">{{ $farmer->phone }}</td>
                <td class="p-3">{{ $farmer->village }}</td>
                <td class="p-3">{{ $farmer->land_size }}</td>

                <td class="p-3 flex gap-2">

                    <a href="/farmers/{{ $farmer->id }}/edit"
                       class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                       Edit
                    </a>

                    <form action="/farmers/{{ $farmer->id }}" method="POST">

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