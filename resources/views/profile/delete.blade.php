@extends('layouts.master')
@section('title', 'Page Title')
@section('content')

<form action="{{ route('profile.delete', $profile->id) }}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit">Delete Profile</button>
</form>

@endsection
