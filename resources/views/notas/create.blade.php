@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Base de conocimiento</span>
                    <a href="/notas" class="btn btn-primary btn-sm">Volver a lista de notas...</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <form method="POST" action="/notas">
                    @csrf

                    <label for="">Nombre:</label>
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                    />
                    <label for="">Descripcion:</label>
                    <input
                      type="text"
                      name="descripcion"
                      placeholder="Descripcion"
                      class="form-control mb-2" 
                    />

                    <label for="">Categoria:</label>
                    <select name="category_id" id="inputCategory_id" required="required" class="form-control mb-2">
                    <option value="">Seleccione una categoria</option>
                    @foreach($categories as $category)
                      <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                    @endforeach
                    </select>

                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                    <button class="btn btn-primary btn-block" type="reset" name="Borrar" value="borrar">Borrar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection