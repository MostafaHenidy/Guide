@extends('layouts.app')
@section('content')
    <div class="fw-medium">
        <a href="/edu" class="btn btn-outline-secondary ">Back</a>
        <h1 class="fw-bold fs-4 py-3">{{ $edu->title }}</h1>
        <img src="/covers/{{ $edu->cover_image }}" class="img-fluid rounded-start py-3" alt="{{ $edu->cover_image }}">
        <p>Address : {{ $edu->address }}</p>
        <p >{{ $edu->body }}</p>
        <p>Avaliable capacity :{{ $edu->info }}</p>
        <p>Created at :{{ $edu->created_at }}</p>
    </div>
    {!! Form::open(['route' => ['edu.destroy', $edu->id], 'method' => 'edu', 'class' => 'd-inline float-end']) !!}

    {{ Form::hidden('_method', 'DELETE') }}
    <div class="form-group">
        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger my-1 float-end']) }}
    </div>

    {!! Form::close() !!}
    <a href="/edu/{{ $edu->id }}/edit" class="btn btn-outline-primary float-start">Edit</a>
@endsection
