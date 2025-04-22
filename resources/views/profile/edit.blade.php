@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
<div style="max-width: 500px; margin: auto; background: white; padding: 30px; border-radius: 10px;">
    <h2 style="color: #1D3C6A; font-size: 24px; margin-bottom: 20px;">Edit Profile</h2>

    @if(session('success'))
        <div style="color: green; margin-bottom: 10px;">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div style="color: red; margin-bottom: 10px;">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required
            style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;">

        <label for="phone">Phone</label>
        <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" required
            style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;">

        <button type="submit" style="background-color: #1D3C6A; color: white; padding: 10px 15px; border: none; border-radius: 6px;">
            Update Profile
        </button>
    </form>
</div>
@endsection
