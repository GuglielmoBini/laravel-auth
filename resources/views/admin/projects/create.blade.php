@extends('layouts.app')
@section('title', 'Crea Progetto')
@section('content')
<header>
    <h1 class="my-5">Crea</h1>
</header>
<div class="card p-4 shadow">
    <form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome Progetto</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <small class="text-muted">Inserisci il nome del progetto</small>
                  </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="7" name="description" required></textarea>
                    <small class="text-muted">Inserisci una descrizione del progetto</small>
                  </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="project_url" class="form-label">Link Progetto</label>
                    <input type="text" class="form-control" id="project_url" name="project_url" required>
                    <small class="text-muted">Inserisci il link del progetto</small>
                  </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="image_url" class="form-label">Url Immagine</label>
                    <input type="url" class="form-control" id="image_url" name="image_url">
                    <small class="text-muted">Inserisci l'url dell'immagine</small>
                  </div>
            </div>
        </div>
        <div class="d-flex justify-content-center my-2">
            <button type="submit" class="btn btn-success w-25">Salva</button>
        </div>
    </form>
</div>
<a href="{{ route('admin.projects.index') }}" class="btn btn-primary mt-3">Torna Indietro</a>
@endsection