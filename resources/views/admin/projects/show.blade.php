@extends('layouts.app')
@section('title', 'Details')
@section('content')
<section id="detail">
    <header>
        <h1 class="my-4">{{ $project->name }}</h1>
    </header>
    <div class="d-flex flex-column align-items-center">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-4">
              <img src="{{ $project->image_url }}" class="img-fluid w-100 h-100 rounded-start" alt="{{ $project->name }}">
            </div>
            <div class="col-8">
              <div class="row g-0 h-100 flex-column">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Descrizione</h5>
                  <p class="card-text flex-grow-1">{{ $project->description }}</p>
                  <p class="card-text"><small class="text-muted"><strong>Created: </strong>{{ $project->created_at }}</small></p>
                </div>
                <div class="card-body border-top d-flex align-items-center justify-content-around">
                  <a href="{{ $project->project_url }}">Project link</a>
                  <a href="{{ $project->image_url }}">Image URL</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-danger w-25 my-4">Torna Indietro</a>
    </div>
  </section>
@endsection