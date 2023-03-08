@extends('layouts.app')
@section('title', 'Projects')
@section('content')
    <header>
        <h1 class="my-5">Projects</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-success mb-3"><i class="fa-solid fa-plus"></i> Aggiungi</a>
    </header>
    <table class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Creato il</th>
              <th scope="col">Aggiornato il</th>
              <th class="border-0"></th>
            </tr>
          </thead>
          <tbody>
            @forelse ($projects as $project)
            <tr>
                <th scope="row" class="border-start">{{ $project->id }}</th>
                <td>{{ $project->name }}</td>
                <td>{{ $project->created_at }}</td>
                <td class="border-end">{{ $project->updated_at }}</td>
                <td class="d-flex align-items-center justify-content-end border-0">
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-success">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mx-4"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr> 
            @empty
                <tr>
                    <th scope="row" colspan="5" class="text-center">Non sono presenti progetti</th>
                </tr>
            @endforelse            
          </tbody>
    </table>
@endsection