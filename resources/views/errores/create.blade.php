@extends("../layouts.plantilla")

@section("cabecera")
Agregar Errores
@endsection

@section("contenido")

<form action="{{url('/errores')}}" method="post">

    <table>
        <tr>
            <td>Nombre</td>
            <td>
                <input type="text" name="NombreError" id="">

                {{csrf_field()}}
            </td>
        </tr>
        <tr>
            <td>Descripcion</td>
            <td><input type="text" name="Descripcion"></td>
        </tr>
        <tr>
            <td>Soluciones</td>
            <td><input type="text" name="Soluciones"></td>
        </tr>
        <tr>
        <td colspan="2" align="center">
            <input type="submit" name="enviar" value="Enviar">
        </td>
        </tr>
    </table>



    

</form>

@endsection

@section("pie")

@endsection