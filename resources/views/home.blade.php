@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body grid gap-3 justify-content-center ">
                        <a href="/posts/create" class="btn btn-primary btn-sm">Add Hospital</a>
                        <a href="/edu/create" class="btn btn-primary btn-sm">Add School</a>
                        <a href="/cafe/create" class="btn btn-primary btn-sm">Add restorant</a>
                        <a href="/job/create" class="btn btn-primary btn-sm">Add job</a>
                        <hr class="border border-primary">
                        <h5>Your Medical Locations</h5>
                        @if (count($posts) > 0)
                            <table class="table table-striped-columns">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            Title
                                        </th>
                                        <th scope="col">

                                        </th>
                                        <th scope="col">

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>
                                                {{ $post->title }}
                                            </td>
                                            <td>
                                                <a href="/posts/{{ $post->id }}/edit"
                                                    class="btn btn-outline-primary float-start">Edit</a>
                                            </td>
                                            <td>
                                                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'post', 'class' => 'd-inline float-end']) !!}

                                                {{ Form::hidden('_method', 'DELETE') }}
                                                <div class="form-group">
                                                    {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger my-1 float-end']) }}
                                                </div>

                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                        <p> No location Avaliable </p>
                        @endif
                        <hr>
                    </div>
                    <div>
                        <h5>Your Medical Locations</h5>
                        @if (count($edus) > 0)
                            <table class="table table-striped-columns">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            Title
                                        </th>
                                        <th scope="col">

                                        </th>
                                        <th scope="col">

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($edus as $edu)
                                        <tr>
                                            <td>
                                                {{ $edu->title }}
                                            </td>
                                            <td>
                                                <a href="/edu/{{ $edu->id }}/edit"
                                                    class="btn btn-outline-primary float-start">Edit</a>
                                            </td>
                                            <td>
                                                {!! Form::open(['route' => ['edu.destroy', $edu->id], 'method' => 'edu', 'class' => 'd-inline float-end']) !!}

                                                {{ Form::hidden('_method', 'DELETE') }}
                                                <div class="form-group">
                                                    {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger my-1 float-end']) }}
                                                </div>

                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                        <p> No location Avaliable </p>
                        @endif
                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
{{-- -------------------------------------------------------- --}}
{{-- @foreach ($cafes as $cafe)
                                        <tr>
                                            <td>
                                                {{ $cafe->title }}
                                            </td>
                                            <td>
                                                <a href="/cafe/{{ $cafes->id }}/edit"
                                                    class="btn btn-outline-primary float-start">Edit</a>
                                            </td>
                                            <td>
                                                {!! Form::open(['route' => ['cafe.destroy', $cafes->id], 'method' => 'post', 'class' => 'd-inline float-end']) !!}

                                                {{ Form::hidden('_method', 'DELETE') }}
                                                <div class="form-group">
                                                    {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger my-1 float-end']) }}
                                                </div>

                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach --}}
{{-- -------------------------------------------------------- --}}
{{-- @foreach ($jobs as $job)
                                        <tr>
                                            <td>
                                                {{ $job->title }}
                                            </td>
                                            <td>
                                                <a href="/job/{{ $jobs->id }}/edit"
                                                    class="btn btn-outline-primary float-start">Edit</a>
                                            </td>
                                            <td>
                                                {!! Form::open(['route' => ['job.destroy', $jobs->id], 'method' => 'post', 'class' => 'd-inline float-end']) !!}

                                                {{ Form::hidden('_method', 'DELETE') }}
                                                <div class="form-group">
                                                    {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger my-1 float-end']) }}
                                                </div>

                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach --}}
{{-- -------------------------------------------------------- --}}

