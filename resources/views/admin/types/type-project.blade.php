@extends('layouts.admin')

@section('content')

    <h1 class="fw-bold text-primary">Index Types</h1>

    <form class="col-5" action="{{ route('admin.types.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="New Type" name="name">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Create</button>
        </div>
    </form>

    <table class="table table-dark w-75">
        <thead>
          <tr>
            <th scope="col">Type</th>
            <th scope="col">Project</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($types as $type)
                <tr>
                    <td>
                        {{ $type->name }}
                    </td>

                    <td>
                        <ul>

                            @foreach ($type->projects as $project)
                            <li>
                                {{ $project->name }}
                                <a class="btn btn-success" href="{{ route('admin.projects.show', $project) }}">Go to Details</a>
                            </li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
