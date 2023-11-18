@extends('layouts.app')
@section('content')
    <h1 class="fw-bold fs-4 py-3">Education services</h1>
    @if (count($edus) > 0)
        @foreach ($edus as $edu)
            <div>
                <div class="card mb-3 m-2">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/covers/{{$edu->cover_image}}" class="img-fluid rounded-start" alt="{{$edu->cover_image}}" >
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="/edu/{{ $edu->id }}">
                                    <h5 class="card-title">{{ $edu->title }}</h5>
                                </a>
                                <p class="card-text">{{ $edu->address }}</p>
                                <p class="card-text">Avaliable capacity : {{ $edu->info }}</p>
                                <p class="card-text"><small class="text-body-secondary">Created at :
                                        {{ $edu->created_at }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
        {{$edus->links()}}
    @else
        <p class="fw-medium fs-4 py-2 ">No Location Avaliable ! </p>
    @endif
@endsection
