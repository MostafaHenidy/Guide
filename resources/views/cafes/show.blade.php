@extends('layouts.app')
@section('content')
    <div class="fw-medium">
        <h1 class="fw-bold fs-4 py-3">{{ $cafes->title }}</h1>
        <img src="/covers/{{ $cafes->cover_image }}" class="img-fluid rounded-start py-3" alt="{{ $cafes->cover_image }}">
        <p>Address : {{ $cafes->address }}</p>
        <p >{{ $cafes->body }}</p>
        <p>Avaliable capacity :{{ $cafes->info }}</p>
        <p>Created at :{{ $cafes->created_at }}</p>
    </div>
    {!! Form::open(['route' => ['cafe.destroy', $cafes->id], 'method' => 'post', 'class' => 'd-inline float-end']) !!}

    {{ Form::hidden('_method', 'DELETE') }}
    <div class="form-group">
        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger my-1 float-end']) }}
    </div>

    {!! Form::close() !!}
    <a href="/cafe/{{ $cafes->id }}/edit" class="btn btn-outline-primary float-start">Edit</a>
@endsection
