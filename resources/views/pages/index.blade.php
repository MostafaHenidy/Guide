@extends('layouts.app')
@section('content')
    <div class="bg-secondary rounded">
        <div class="p-3">
            <h1 class="text-center">{{ $title }}</h1>
            <p class="fw-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam in, vero modi velit iste officiis. Possimus sed
                voluptatibus beatae. Ipsam necessitatibus eos officiis aspernatur perspiciatis reprehenderit porro, quisquam
                voluptatum ipsum.</p>
                <div class="d-flex justify-content-center">
                    <a href="/login" class="btn btn-success m-1">Login</a>
                    <a href="/register" class="btn btn-primary m-1">Register</a>
                </div>
        </div>
    </div>
@endsection
