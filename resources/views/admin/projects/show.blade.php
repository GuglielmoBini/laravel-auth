@extends('layouts.app')
@section('title', 'Details')
@section('content')
<section id="detail">
    <header>
        <h1 class="my-3">{{ $project->name }}</h1>
    </header>
    <div class="d-flex flex-column align-items-center">
        <div class="card mt-2" style="max-width: 450px;">
            <img src="{{ $project->image_url }}" class="card-img-top img-fluid" alt="{{ $project->name }}">
            <div>
                <div class="card-body">
                  <p class="card-text">{{ $project->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>Created: </strong>{{ $project->created_at }}</li>
                </ul>
                <div class="card-body">
                  <a href="{{ $project->project_url }}" class="card-link">Project link</a>
                  <a href="{{ $project->image_url }}" class="card-link">Image URL</a>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-danger w-25 my-4">Torna Indietro</a>
    </div>
  </section>
@endsection