
    <div>
        @vite('resources/css/app.css')
        @extends('layouts.master')
        @section('title', 'Page Title')
        @section('content')

        @include('components.card')
        {{-- <x-card :profiles="$profiles" /> --}}

        @endsection

    </div>


