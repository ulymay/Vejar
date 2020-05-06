@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de Base de conocimiento para: {{auth()->user()->name}}</span>
                    <a href="/notas" class="btn btn-primary btn-sm">Volver a lista de notas...</a>
                </div>
                @if ( session('mensaje') )
                <div class="alert alert-success">{{ session('mensaje') }}</div>
              @endif
                <div>
                <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Categoria</th>
                            </tr>
                        </thead>                        
                            <tr>
                                <th scope="row">{{ $nota->id }}</th>
                                <td>{{ $nota->nombre }}</td>
                                <td>{{ $nota->descripcion }}</td>
                                <td>{{ $nota->category->title }}</td>


                            </tr>    
                            <thead>
                                <th scope="col">Solucion</th>
                                <th scope="col">Recomendaciones</th>
                                <th scope="col">Guia</th>
                                <th scope="col">Articulos relacionados</th>
                                <th scope="col">Acción</th>
                            </thead>   
                            <tr>
                                <td>{{ $nota->solucion }}</td>
                                <td>{{ $nota->recomendaciones }}</td>
                                <td>{{ $nota->guia }}</td>
                                <td>{{ $nota->relacionado }}</td>
                                <td><a href="{{route('notas.edit', $nota)}}" class="btn btn-outline-info btn-sm">Editar</a></td>
                            </tr>                     
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()