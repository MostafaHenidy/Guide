@extends('layouts.app')
@section('content')
    <h1 class="fw-bold fs-4 py-3">Edit Location</h1>
    {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'post']) !!}
    @csrf
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $post->title, ['class' => 'form-control my-2']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', $post->body, ['class' => 'form-control my-2 ', 'rows' => '5']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address', $post->address, ['class' => 'form-control my-2']) }}
    </div>
    <div class="form-group">
        {{ Form::label('info', 'Info') }}
        {{ Form::text('info', $post->info, ['class' => 'form-control my-2']) }}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    <div class="form-group">
        {{ Form::submit('Submit', ['class' => 'btn btn-primary my-1 float-end']) }}
    </div>

    {!! Form::close() !!}
@endsection
