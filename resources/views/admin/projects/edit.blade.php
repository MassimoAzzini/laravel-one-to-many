@extends('layouts.admin')

@section('content')

<form action="{{ route('admin.projects.update', $project) }}" method="POST" class="row g-3">

    @csrf
    @method('PUT')
    <div class="col-12">
        <label for="name" class="form-label">Name Project</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $project->name }}">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="col-4">
        <label for="start_project" class="form-label">Start Project</label>
        <input type="date" class="form-control @error('start_project') is-invalid @enderror" id="start_project" name="start_project" value="{{ $project->start_project }}">
        @error('start_project')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="col-4">
        <label for="end_project" class="form-label">End Project</label>
        <input type="date" class="form-control @error('end_project') is-invalid @enderror" id="end_project" name="end_project" value="{{ $project->end_project }}">
        @error('end_project')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="col-4">
        <label for="url" class="form-label">Link Project</label>
        <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ $project->url }}">
        @error('url')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="col-12">
        <label for="short_description" class="form-label">Short Description</label>
        <input type="text" class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" value="{{ $project->short_description }}">
        @error('short_description')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ $project->description }}">
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Send Edit</button>
        <a class="btn btn-secondary" href="{{ route('admin.projects.show', $project) }}">Cancel</a>
    </div>
</form>


@endsection

