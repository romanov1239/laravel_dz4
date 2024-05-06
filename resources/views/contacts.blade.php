@extends('layouts.default')

@section('title', 'Contacts')

@section('content')
    <div class="container">
        <h1>Contact Information</h1>
        <p><strong>Address:</strong> {{ $address }}</p>
        <p><strong>Post Code:</strong> {{ $post_code }}</p>
        <p><strong>Email:</strong>
            @if($email)
                <a href="mailto:{{ $email }}">{{ $email }}</a>
            @else
                Email address is not specified.
            @endif
        </p>
        <p><strong>Phone:</strong> <a href="tel:{{ $phone }}">{{ $phone }}</a></p>
    </div>
@endsection

