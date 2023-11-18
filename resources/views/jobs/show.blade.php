@extends('layouts.app')
@section('content')
    <div class="fw-medium">
        <a href="/job" class="btn btn-outline-secondary">Back</a>
        <h1 class="fw-bold fs-4 py-3">{{ $jobs->title }}</h1>
        <img src="/covers/{{ $jobs->cover_image }}" class="img-fluid rounded-start py-3" alt="{{ $jobs->cover_image }}">
        <p>Address : {{ $jobs->address }}</p>
        <p >{{ $jobs->body }}</p>
        <p>Avaliable capacity :{{ $jobs->info }}</p>
        <p>Created at :{{ $jobs->created_at }}</p>
    </div>
    {!! Form::open(['route' => ['job.destroy', $jobs->id], 'method' => 'post', 'class' => 'd-inline float-end']) !!}

    {{ Form::hidden('_method', 'DELETE') }}
    <div class="form-group">
        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger my-1 float-end']) }}
    </div>

    {!! Form::close() !!}
    <a href="/job/{{ $jobs->id }}/edit" class="btn btn-outline-primary float-start">Edit</a>
@endsection
