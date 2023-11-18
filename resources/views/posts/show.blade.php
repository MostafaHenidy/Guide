@extends('layouts.app')
@section('content')
    <div class="fw-medium">
        <a href="/posts" class="btn btn-outline-secondary">Back</a>
        <h1 class="fw-bold fs-4 py-3">{{ $post->title }}</h1>   
        <img src="/covers/{{ $post->cover_image }}" class="img-fluid rounded-start py-3" alt="{{ $post->cover_image }}">
        <p>Address : {{ $post->address }}</p>
        <p >{{ $post->body }}</p>
        <p>Avaliable capacity :{{ $post->info }}</p>
        <p>Created at :{{ $post->created_at }}</p>
    </div>
    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'post', 'class' => 'd-inline float-end']) !!}

    {{ Form::hidden('_method', 'DELETE') }}
    <div class="form-group">
        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger my-1 float-end']) }}
    </div>

    {!! Form::close() !!}
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary float-start">Edit</a>
@endsection
