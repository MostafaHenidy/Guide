@extends('layouts.app')
@section('content')
    <h1 class="fw-bold fs-4 py-3">Job services</h1>
    @if (count($jobs) > 0)
        @foreach ($jobs as $job)
            <div>
                <div class="card mb-3 m-2">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/covers/{{$job->cover_image}}" class="img-fluid rounded-start" alt="{{$job->cover_image}}" >
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="/job/{{ $job->id }}">
                                    <h5 class="card-title">{{ $job->title }}</h5>
                                </a>
                                <p class="card-text">{{ $job->address }}</p>
                                <p class="card-text">Avaliable capacity : {{ $job->info }}</p>
                                <p class="card-text"><small class="text-body-secondary">Created at :
                                        {{ $job->created_at }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
        {{$jobs->links()}}
    @else
        <p class="fw-medium fs-4 py-2 ">No Location Avaliable ! </p>
    @endif
@endsection