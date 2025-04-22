@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); max-width: 700px; margin: auto;">
        <h1 style="font-size: 28px; font-weight: bold; color: #e8751a; margin-bottom: 10px;">Welcome, {{ Auth::user()->name }} 🎉</h1>
        {{-- <p style="font-size: 16px; color: #555; margin-bottom: 25px;">Here is your dashboard overview.</p> --}}

        <div style="border-top: 1px solid #e2e8f0; padding-top: 20px;">
            <div style="margin-bottom: 15px;">
                <strong style="display: inline-block; width: 100px; color: #e84a5f;">Name:</strong> {{ Auth::user()->name }}
            </div>
            <div style="margin-bottom: 15px;">
                <strong style="display: inline-block; width: 100px; color: #e84a5f;">Email:</strong> {{ Auth::user()->email }}
            </div>
            <div style="margin-bottom: 15px;">
                <strong style="display: inline-block; width: 100px; color: #e84a5f;">Phone:</strong> {{ Auth::user()->phone ?? 'N/A' }}
            </div>
        </div>
    </div>
@endsection
