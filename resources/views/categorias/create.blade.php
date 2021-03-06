@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Categoria</span>
                    <a href="/categorias" class="btn btn-primary btn-sm">Volver a lista de categorias...</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <form method="POST" action="/categorias">
                    @csrf

                    <label for="">Categoria:</label>
                    <input
                      type="text"
                      name="title"
                      placeholder="Title"
                      class="form-control mb-2"
                    />
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                    <button class="btn btn-primary btn-block" type="reset" name="Borrar" value="borrar">Borrar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection