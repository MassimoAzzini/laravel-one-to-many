@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between">
        <h1><strong>Project: </strong> {{ $project->name }}</h1>

        <div>
            <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project) }}">Edit</a>
            @include('admin.partials.btnDelate', [
                'route' => route('admin.projects.destroy', $project),
                'message' => 'Are you sure you want to delete this project?'
                ])
            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Index</a>
        </div>
    </div>

    <div class="row my-4">
        <div class="col">
            <strong>Start Project: </strong> <span>{{ $project->start_project }}</span>
        </div>
        <div class="col">
            <strong>End Project: </strong>

            @if ($project->end_project)
                <span>{{ $project->end_project }}</span>
            @else
                <span>Project still in progress</span>
            @endif

        </div>
        <div class="col">
            <strong>Link Project: </strong> <a href="{{ $project->url }}"> Project link </a>
        </div>
    </div>

    <p>
        <strong>Description Project: </strong>{{ $project->description }}
    </p>


@endsection
