{{-- @extends('layout.app') --}}
@extends('layouts.app')

@section('title', 'Instructions')

@section('content')
<div style="max-width: 600px; margin: auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
    <h2 style="text-align: center; margin-bottom: 20px; color:#6c757d">Test Instructions</h2>
    <ul style="margin-bottom: 30px; color: #333; line-height: 1.6; padding: 10px">
        <li>Ensure all fields are filled correctly.</li>
        <li>Review your details before submission.</li>
        <li>Click "Submit" only once.</li>
        <li>Do not refresh or close the browser during the test.</li>
    </ul>
    <div style="text-align: center;">
        <a href="{{ route('dashboard') }}" style="padding: 10px 20px; background-color: #6c757d; color: white; text-decoration: none; border-radius: 5px; margin-right: 10px;">Back</a>
        <a href="" style="padding: 10px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">Start Test</a>
    </div>
</div>
@endsection
