@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Prueba {{auth()->user()->name}}</span>
                    <a href="/categorias/create" class="btn btn-primary btn-sm">Nueva Categoria</a>
                </div>
                @if ( session('mensaje') )
                <div class="alert alert-success">{{ session('mensaje') }}</div>
              @endif
                <div class="card-body">      
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>                        
                        <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <th scope="row">{{ $categoria->id }}</th>
                                <td>{{ $categoria->title }}</td>
                                <td>
                                
                                   <a href="{{route('categorias.edit', $categoria)}}" class="btn btn-info btn-sm">Editar</a>                            

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()