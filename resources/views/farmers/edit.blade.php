@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold text-blue-700">
            Edit Farmer
        </h1>

        <a href="/farmers"
           class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
           Back
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

    <form action="/farmers/{{ $farmer->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Farmer Name
            </label>

            <input type="text"
                   name="name"
                   value="{{ $farmer->name }}"
                   class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

        </div>

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Phone Number
            </label>

            <input type="text"
                   name="phone"
                   value="{{ $farmer->phone }}"
                   class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

        </div>

        <div class="mb-4">

            <label class="block mb-2 font-semibold">
                Village
            </label>

            <input type="text"
                   name="village"
                   value="{{ $farmer->village }}"
                   class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

        </div>

        <div class="mb-6">

            <label class="block mb-2 font-semibold">
                Land Size (Acres)
            </label>

            <input type="text"
                   name="land_size"
                   value="{{ $farmer->land_size }}"
                   class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

        </div>

        <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">

                Update Farmer

        </button>

    </form>

</div>

@endsection