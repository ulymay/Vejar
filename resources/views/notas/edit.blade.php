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
                    <label for="">Nombre:</label>
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                      value="{{ $nota->nombre }}"
                    />

                    <input type="hidden" name="_method" value="PUT">
                    <label for="">Descripcion:</label>
                    <input
                      type="text"
                      name="descripcion"
                      placeholder="Descripcion"
                      class="form-control mb-2" 
                      value="{{ $nota->descripcion }}"
                    />
                    
                    <label for="">Categoria:</label>
                    <select name="category_id" id="inputCategory_id" required="required" class="form-control mb-2">
                    <option value="">Seleccione una categoria</option>
                    @foreach($categories as $category)
                      <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                    @endforeach
                    </select>

                    <label for="">Solución:</label>
                    <input
                      type="text"
                      name="solucion"
                      placeholder="Solución"
                      class="form-control mb-2" 
                      value="{{ $nota->solucion }}"
                    />

                    <label for="">Recomendaciones:</label>
                    <input
                      type="text"
                      name="recomendaciones"
                      placeholder="Recomendaciones"
                      class="form-control mb-2" 
                      value="{{ $nota->recomendaciones }}"
                    />

                    <label for="">Guia:</label>
                    <input
                      type="text"
                      name="guia"
                      placeholder="Guia"
                      class="form-control mb-2" 
                      value="{{ $nota->guia }}"
                    />

                    <label for="">Relacionado:</label>
                    <input
                      type="text"
                      name="relacionado"
                      placeholder="Relacionado"
                      class="form-control mb-2" 
                      value="{{ $nota->relacionado }}"
                    />

                    <hr>
                    <button class="btn btn-success" type="submit">Editar</button>                  
                    </form>
                    <hr>
                    <form action="/notas/{{$nota->id}}" method="post" class="d-inline">                 
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