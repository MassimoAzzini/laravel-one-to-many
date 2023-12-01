@extends('layouts.admin')

@section('content')

    <h1 class="fw-bold text-primary">List Project by Type</h1>

    <div class="cont-type bg-dark w-50 p-5">
        <h4 class="text-white">List Type</h4>
        <div class="accordion accordion-flush border-bottom border-white" id="accordionFlushExample">
            @foreach ($types as $type)
                <div class="accordion-item bg-dark text-white">
                    <h2 class="accordion-header" id="flush-headingOne-{{$type->id}}">
                        <button
                        class="accordion-button collapsed bg-dark text-white"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne-{{$type->id}}"
                        aria-expanded="false"
                        aria-controls="flush-collapseOne-{{$type->id}}">
                            {{$type->name}}
                        </button>
                    </h2>
                    <div
                    id="flush-collapseOne-{{$type->id}}"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne-{{$type->id}}"
                    data-bs-parent="#accordionFlushExample">
                        <ul>
                            @foreach ($type->projects as $project)
                                <li class="my-3 d-flex justify-content-between">
                                    {{ $project->name }}

                                    <a class="btn btn-success btn-sm" href="{{ route('admin.projects.show', $project) }}">Go to Details</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>


            @endforeach
        </div>
    </div>


@endsection
