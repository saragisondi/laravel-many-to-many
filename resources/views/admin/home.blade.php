@extends('layouts.app')

@section('content')
<div class="py-5 mx-5 overflow-auto container-fluid">
  <h2 class="my-4 fs-4 text-secondary fw-bold">
      Home Dashboard
  </h2>

  <h4 class="fw-bold">Numero Progetti: {{ $n_project }} </h4>
  <a href="{{route('admin.projects.create')}}" class="mx-2 my-3 btn btn-primary fw-bold">Nuovo Progetto</a>

  <div class="row d-flex justify-content-center">

    <h4 class="my-5 d-flex justify-content-center">Ultimo Progetto:
      <h5 class="text-center text-uppercase fs-2 fw-bold"><a class=" text-decoration-none text-reset fw-bold" href="{{route('admin.projects.show', $last_project)}}">{{ $last_project->title }}</a>
      </h5>
    </h4>


    <div class="d-flex justify-content-center">
      <img class="w-50" src="{{asset('storage/' . $project->image_path)}}" onerror="this.src='https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg'">
    </div>
    <p>{!! $last_project->text !!}</p>

  </div>
</div>
@endsection

