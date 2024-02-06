@extends('layouts.admin')
@section('content')
    <div class="container py-5">
        <div class="row g-4">
            @foreach ($projects as $project)
                <div class="col-3">
                    <div class="card overflow-hidden d-flex h-100" style="width: 18rem;">
                        <img src="{{ $project->screen }}" class="card-img-top" alt="{{ $project->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text overflow-auto">{{ $project->description }}</p>

                        </div>
                        <div class="card-body">
                            <a href="{{ route('admin.project.show', $project->id) }}">Dettaglio</a>
                            <a href="admin.project.update" class="btn btn-primary">Update</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
