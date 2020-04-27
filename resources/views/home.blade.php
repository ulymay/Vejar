@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table border='1' width=100%>
                            <tr>
                                <td>Error</td>
                                <td>Descripcion</td>
                                <td>Soluciones</td>
                            </tr>
                            @foreach($errors as $error)
                            
                            <tr>
                                <td>{{$error->NombreError}}</td>
                                <td>{{$error->Descripcion}}</td>
                                <td>{{$error->Soluciones}}</td>
                            </tr>
                            @endforeach
                            <br>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
