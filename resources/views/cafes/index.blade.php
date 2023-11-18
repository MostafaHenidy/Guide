@extends('layouts.app')
@section('content')
    <h1 class="fw-bold fs-4 py-3">Cafes and resorants services</h1>
    @if (count($cafes) > 0)
        @foreach ($cafes as $cafe)
            <div>
                <div class="card mb-3 m-2">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/covers/{{$cafe->cover_image}}" class="img-fluid rounded-start" alt="{{$cafe->cover_image}}" >
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="/cafe/{{ $cafe->id }}">
                                    <h5 class="card-title">{{ $cafe->title }}</h5>
                                </a>
                                <p class="card-text">{{ $cafe->address }}</p>
                                <p class="card-text">Avaliable capacity : {{ $cafe->info }}</p>
                                <p class="card-text"><small class="text-body-secondary">Created at :
                                        {{ $cafe->created_at }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
        {{$cafes->links()}}
    @else
        <p class="fw-medium fs-4 py-2 ">No Location Avaliable ! </p>
    @endif
@endsection
