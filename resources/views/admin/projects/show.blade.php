@extends('layouts.app')

@section('content')
<div class="container p-5">
  <div class="text-center d-flex justify-content-center">

    <h2 class="my-4 fs-2 fw-bold text-secondary">
      {{$project->title}}
    </h2>


    <div class="my-4 d-flex">
      {{-- Edit --}}
      <a href="{{route('admin.projects.edit', $project)}}" class="mx-2 btn btn-warning" title="Modifica"><i class="fa-solid fa-pencil"></i></a>


      <!-- Button trigger modal -->
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa-solid fa-trash-can"></i>
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-danger fw-bold" id="exampleModalLabel"> Attenzione </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Sei sicuro di voler eliminare {{ $project->title}}?
            </div>

            {{-- Delete --}}
            <form
              action="{{route('admin.projects.destroy', $project)}}"
              method="POST">
                @csrf
                @method('DELETE')

              <div class="modal-footer">
                <button
                type="submit"
                class="btn btn-danger fw-bold">
                Elimina
                </button>

                <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Annulla</button>
            </form>

          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<div class="text-center">

  <div class="d-flex justify-content-center">
    <img class=" w-50" src="{{asset('storage/' . $project->image_path)}}" onerror="this.src='https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg'">
  </div>

  <div class="my-2 fw-bold">Progetto realizzato in:</div>

  <p class="px-2 py-2 fs-6 badge text-bg-primary fw-bold">{{$project->type?->name}}</p>
  @forelse ($project->technologies as $technology )
  <p class="px-2 py-2 fs-6 badge text-bg-info fw-bold">{{$technology->name}}</p>
  @empty
  <span class="fw-bold"> - </span>
  @endforelse
</div>


<span class="d-flex">
  Data: <p class="mx-1"> {{ $date_formatted }} </p>
</span>

<div class="fw-bold">Consegna:</div>
<p>{!!$project->text!!}</p>

<div class="d-flex justify-content-center">
  <a href="{{route('admin.projects.index')}}" class="px-4 py-2 my-4 fs-5 btn btn-secondary"><i class="fa-solid fa-arrow-rotate-left"></i> Elenco Progetti</a>
</div>

</div>

@endsection
