@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Editar Base de conocimiento</span>
                  
                    <a href="/notas" class="btn btn-primary btn-sm">Volver a lista de notas...</a>
                </div>
                <div class="card-body">     
                  <form action="/notas/{{$nota->id}}" method="post">                 
                    @csrf

                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                      value="{{ $nota->nombre }}"
                    />

                    <input type="hidden" name="_method" value="PUT">

                    <input
                      type="text"
                      name="descripcion"
                      placeholder="Descripcion"
                      class="form-control mb-2" 
                      value="{{ $nota->descripcion }}"
                    />
                    <button class="btn btn-outline-success btn-block" type="submit">Editar</button>
                    
                    <form action="/notas/{{$nota->id}}" method="post">                 
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input class="btn btn-outline-danger btn-block" type="submit" value="Eliminar">
                    </form>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection() 