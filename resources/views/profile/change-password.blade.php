@extends('layouts.app')

@section('title', 'Change Password')

@section('content')
    <div style="max-width: 500px; margin: auto; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <h2 style="color:#6c757d">Change Password</h2>

        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div style="color: red;">{{ session('error') }}</div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">
            {{-- <form action="" method="POST"> --}}
            @csrf

            <label>Current Password</label>
            <input type="password" name="current_password" required style="width: 100%; padding: 8px; margin-bottom: 10px;">

            <label>New Password</label>
            <input type="password" name="new_password" required style="width: 100%; padding: 8px; margin-bottom: 10px;">

            <label>Confirm New Password</label>
            <input type="password" name="new_password_confirmation" required style="width: 100%; padding: 8px; margin-bottom: 20px;">

            <button type="submit" style="padding: 10px 20px; background: #1D3C6A; color: #fff; border: none; border-radius: 4px; cursor:pointer;">Update Password</button>
        </form>
    </div>
@endsection
