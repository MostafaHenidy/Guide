@extends('layouts.app')
@section('content')
    <h1 class="fw-bold fs-4 py-3">Medical services</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div>
                <div class="card mb-3 m-2">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/covers/{{$post->cover_image}}" class="img-fluid rounded-start" alt="{{$post->cover_image}}" >
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="/posts/{{ $post->id }}">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                </a>
                                <p class="card-text">{{ $post->address }}</p>
                                <p class="card-text">Avaliable capacity : {{ $post->info }}</p>
                                <p class="card-text"><small class="text-body-secondary">Created at :
                                        {{ $post->created_at }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p class="fw-medium fs-4 py-2 ">No Location Avaliable ! </p>
    @endif
@endsection
