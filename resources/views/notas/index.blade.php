@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de Base de conocimiento para: {{auth()->user()->name}}</span>
                    <a href="/notas/create" class="btn btn-primary btn-sm">Nueva Nota</a>
                </div>
                @if ( session('mensaje') )
                <div class="alert alert-success">{{ session('mensaje') }}</div>
              @endif
                <div class="card-body">      
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        @foreach ($notas as $nota)
                            <tr>
                                <th scope="row">{{ $nota->id }}</th>
                                <td>{{ $nota->nombre }}</td>
                                <td>{{ $nota->descripcion }}</td>
                                <td>
                                <tr>
                                   <a href="{{route('notas.edit', $nota)}}" class="btn btn-outline-info btn-sm">Editar</a>
                                   <a href="{{route('notas.show', $nota)}}" class="btn btn-outline-info btn-sm">Ver</a>                                   

                                </td>
                            </tr>
                            @endforeach
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()