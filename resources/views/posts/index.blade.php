@extends('layouts.app')
@section('content')
    <h1 class="fw-bold fs-4 py-3">Important Places</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div>
                <div class="card mb-3 m-2" >
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->address }}</p>
                                <p class="card-text">Avaliable capacity : {{ $post->info }}</p>
                                <p class="card-text"><small class="text-body-secondary">Created at :
                                        {{ $post->created_at }}</small></p>
                            </div>
                        </div>
                    </div>
            </div>
        @endforeach
    @else
        <p class="fw-bolder fs-4 py-2 ">No Posts Avaliable ! </p>
    @endif
@endsection
