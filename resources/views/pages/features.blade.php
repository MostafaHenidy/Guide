@extends('layouts.app')
@section('content')
    <h1>{{ $title }}</h1>
    @if (count($features) > 0)
        <p class="fw-bold fs-5">Our Application helps the refugees to know more about the cities they want to visit or live
            in.
        </p>
        <ul class="list-group">
            @foreach ($features as $feature)
                <li class="list-group-item">{{ $feature }}</li>
            @endforeach
        </ul>
    @endif

@endsection
