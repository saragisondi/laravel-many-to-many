@extends('layouts.app')

@section('content')

<div class="container p-5 overflow-auto">

  @if (session('deleted'))
    <div class="alert alert-success" role="alert">
      {{ session('deleted') }}
    </div>
  @endif



  <h2 class="my-4 fs-4 text-secondary fw-bold">
    Elenco Tecnologie e Progetti
  </h2>


  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Progetti</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($technologies as $technology)
        <tr>
          <td>{{$technology->name}}</td>
          <td>
            <ul>
              @forelse ($technology->projects as $project)
                <li><a href="{{route('admin.projects.show', $technology)}}">{{$project->title}}</a></li>
              @empty
                <li>non sono presenti progetti</li>
              @endforelse
            </ul>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>


@endsection
