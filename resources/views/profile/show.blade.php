@extends('layouts.master') <!-- Assuming you have a main layout file -->

@section('content')
<div class="container  w-[480px] mx-auto my-5">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://picsum.photos/id/237/200/300" class="w-full h-[390px] object-cover" alt="Profile Image">
        <div class="p-6">
            <h2 class="text-2xl font-bold mb-2">{{ $profiles->name }}</h2>
            <p class="text-gray-700 mb-4">{{ $profiles->description }}</p>
            <hr class="my-4"/>
            <a href="{{ route('profile.index') }}" class="inline-block bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-500">Back to Profiles</a>
            <a href="{{ route('profile.edit', $profiles->id) }}" class="inline-block bg-green-700 text-white px-4 py-2 rounded-md hover:bg-green-500">Update</a>
            <a href="{{ route('profile.delete') }}" class="inline-block bg-red-700 text-white px-4 py-2 rounded-md hover:bg-red-500">Delete</a>
        </div>
    </div>
</div>
@endsection