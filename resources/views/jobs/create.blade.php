@extends('layouts.app')
@section('content')
    <h1 class="fw-bold fs-4 py-3">Announce for a job</h1>
    {!! Form::open(['route' => 'job.store', 'method' => 'post', 'files' => true]) !!}
    @csrf
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', ['class' => 'form-control my-2']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', '', ['class' => 'form-control my-2 ', 'rows' => '5']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address', '', ['class' => 'form-control my-2']) }}
    </div>
    <div class="form-group">
        {{ Form::label('info', 'Info') }}
        {{ Form::text('info', '', ['class' => 'form-control my-2']) }}
    </div>
    <div class="form-group">
        {{ Form::file('cover_image', ['class' => 'my-2']) }}
    </div>
    <div class="form-group">
        {{ Form::submit('Submit', ['class' => 'btn btn-primary my-1 float-end']) }}
    </div>

    {!! Form::close() !!}
@endsection
