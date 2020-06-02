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
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            </tr>
                        </thead>                        
                            <tr>
                                <td>{{ $nota->nombre }}</td>
                                <td>{{ $nota->descripcion }}</td>
                            </tr>     
                            <thead>
                            <tr>
                            <th scope="col">Categoria</th>
                            <th scope="col">Solución</th>
                            </tr>
                        </thead>                        
                            <tr>
                                <td>{{ $nota->category->title }}</td>
                                <td>{{ $nota->solucion }}</td>
                            </tr>   
                            <thead>

                                <th scope="col">Recomendaciones</th>
                                <th scope="col">Guia</th>
                            </thead>   
                            <tr>

                                <td>{{ $nota->recomendaciones }}</td>
                                <td>{{ $nota->guia }}</td>


                            </tr>
                            <thead>
                                <th scope="col">Articulos relacionados</th>
                                <th scope="col">Adjuntos</th>
                            </thead>     
                            <tr>
                                <td>{{ $nota->relacionado }}</td>
                                <td><a href="/download"><img src="{{URL::asset('images/documento.jpg')}}" alt="imagen" width="50"></a></td>                             
                            </tr>        
                            <thead>
                                <th scope="col">Acción</th>
                                <th></th>
                            </thead>
                            <tr>
                                <td><a href="{{route('notas.edit', $nota)}}" class="btn btn-outline-info btn-sm">Editar</a></td>
                                <td></td>
                            </tr>        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()