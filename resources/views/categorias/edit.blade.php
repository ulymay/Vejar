@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Editar Categoria</span>
                  
                    <a href="/categorias" class="btn btn-primary btn-sm">Volver a lista de categorias...</a>
                </div>
                <div class="card-body">     
                  <form action="/categorias/{{$categoria->id}}" method="post">                 
                    @csrf
                    <label for="">Categoria:</label>
                    <input
                      type="text"
                      name="title"
                      placeholder="Title"
                      class="form-control mb-2"
                      value="{{ $categoria->title }}"
                    />

                    <input type="hidden" name="_method" value="PUT">

                    <button class="btn btn-success" type="submit">Editar</button>                  
                    </form>
                    <hr>
                    <form action="/categorias/{{$categoria->id}}" method="post" class="d-inline">                 
                    @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-danger" type="submit">Eliminar</button>   
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection() 