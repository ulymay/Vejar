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
           
                  <form method="POST" action="/notas" enctype="multipart/form-data">
                    @csrf

                    @error('nombre')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      El nombre es requerido
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @enderror @if ($errors->has('descripcion'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      La descripción es requerida
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                    @error('solucion')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      La solución es requerida
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @enderror @if ($errors->has('recomendaciones'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      La recomendación es requerida
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif

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

                    <label for="">Solucion:</label>
                    <input
                      type="text"
                      name="solucion"
                      placeholder="Solucion"
                      class="form-control mb-2" 
                    />

                    <label for="">Recomendaciones:</label>
                    <input
                      type="text"
                      name="recomendaciones"
                      placeholder="Recomendaciones"
                      class="form-control mb-2" 
                    />

                    <label for="">Guia detallada:</label>
                    <input
                      type="text"
                      name="guia"
                      placeholder="Guia detallada"
                      class="form-control mb-2" 
                    />

                    <label for="">Articulos relacionados:</label>
                    <input
                      type="text"
                      name="relacionado"
                      placeholder="Relacionado"
                      class="form-control mb-2" 
                    />

                    <label for="file">
                      <input type="file" name="archivo"> 
                    </label>
                  
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                    <button class="btn btn-primary btn-block" type="reset" name="Borrar" value="borrar">Borrar</button>
                  </form>



                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection