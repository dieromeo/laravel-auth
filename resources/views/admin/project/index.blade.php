@extends('layouts.admin')
@section('content')
    {{-- <div class="container py-5">
        <div class="row g-4">
            @foreach ($projects as $project)
                <div class="col-3">
                    <div class="card overflow-hidden d-flex h-100" style="width: 18rem;">
                        <img src="{{ $project->screen }}" class="card-img-top" alt="{{ $project->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text overflow-auto">{{ $project->description }}</p>

                        </div>
                        <div class="card-body row g-4 justify-content-center">
                            <a href="{{ route('admin.project.show', $project->id) }}"
                                class="btn btn-success btn-sm col-6">Dettaglio</a>
                            <a href="{{ route('admin.project.edit', $project->id) }}"
                                class="btn btn-primary btn-sm col-6">Modifica</a>
                            <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST"
                                class="text-center pt-2">
                                @csrf
                                @method('DELETE')

                                <input type="submit" class="btn btn-danger" value="Elimina" id="delete">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $project->screen }}" class="card-img-top" alt="{{ $project->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text overflow-auto">{{ $project->description }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-center">
                                <a href="{{ route('admin.project.show', $project) }}"
                                    class="btn btn-success btn-sm col-6">Dettaglio</a>
                                <a href="{{ route('admin.project.edit', $project) }}"
                                    class="btn btn-primary btn-sm col-6">Modifica</a>
                            </div>
                            <div class="row justify-content-center mt-2">
                                <form action="{{ route('admin.project.destroy', $project) }}" method="POST"
                                    class="text-center">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-sm" value="Elimina">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
