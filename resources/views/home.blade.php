@extends('layouts.default')

@section('content')
    <div class="container">
        <h1>Welcome to the Home Page</h1>
        <p>Name: {{ $name }}</p>
        <p>Age:
            @if($age > 18)
                {{ $age }}
            @else
                <strong>Warning:</strong> This person is young.
            @endif
        </p>
        <p>Position: {{ $position }}</p>
        <p>Address: {{ $address }}</p>
    </div>
@stop
