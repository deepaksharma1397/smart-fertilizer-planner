@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold text-green-700">
            Farmers List
        </h1>

        <a href="/farmers/create"
           class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
           Add Farmer
        </a>

    </div>

    @if(session('success'))

        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>

    @endif

    <table class="w-full border-collapse">

        <thead>

            <tr class="bg-green-600 text-white">

                <th class="p-3 text-left">Name</th>
                <th class="p-3 text-left">Phone</th>
                <th class="p-3 text-left">Village</th>
                <th class="p-3 text-left">Land Size</th>
                <th class="p-3 text-left">Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach($farmers as $farmer)

            <tr class="border-b hover:bg-gray-100">

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