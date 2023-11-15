@extends('layouts.app')
@section('content')
    <h1 class="fw-bold fs-4 py-3">{{$post->title}}</h1>
    <p>{{$post->address}}</p>
@endsection
