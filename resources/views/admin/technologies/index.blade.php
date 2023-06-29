extends('layouts.app')

@section('content')

<div class="container p-5 ">

  @if (session('message'))
    <div class="alert alert-success" role="alert">
      {{ session('message') }}
    </div>
  @endif



  <h2 class="my-4 fs-4 text-secondary fw-bold">
    Gestione Tecnologie
  </h2>

  <div class="w-50">

    <form action="{{route('admin.types.store')}}" method="POST">
      <div class="mb-3 input-group">
        @csrf
        <input type="text" class="form-control" name="name" placeholder="Nuova Tipologia" aria-label="Nuova Tipologia" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="mx-3 btn btn-outline-primary" type="submit"> <i class="fa-solid fa-plus"></i> Add </button>
        </div>
      </div>
    </form>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Tipo</th>
          <th scope="col">Num progetti</th>
          <th scope="col">Azioni</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($technologies as $project)
          <tr>
            <td>

              <form action="#"
              method="POST"
              id="edit-form">
                @csrf
                @method('PUT')

                <input class="border-0" name="name" value="{{$type->name}}">
              </form>
            </td>

            <td>{{count($type->projects)}}</td>

            <td>

              <button
              class="btn btn-success"
              title="Salva"
              onclick="submitEditForm()">
                <i class="fa-solid fa-floppy-disk"></i>
              </button>

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
                    Sei sicuro di voler eliminare {{ $type->name}}?
                  </div>

                  {{-- Delete --}}
                  <form
                    action="{{route('admin.types.destroy', $type)}}"
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
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

  </div>
