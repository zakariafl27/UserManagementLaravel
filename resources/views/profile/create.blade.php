@extends('layouts.master')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Create Profile</h1>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profile.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" name="password" value="{{ old('password') }}" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" name="description">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create Profile</button>
    </form>
</div>
@endsection
