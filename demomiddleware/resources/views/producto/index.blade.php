
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')

@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<a href="{{url('producto/create')}}">Registrar nuevo producto</a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Marca</th>
            <th>Distribuidora</th>
            <th>Tipo de producto</th>
            <th>Fecha de fabricacion</th>
            <th>Fecha de vencimiento</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>

            <td>
                <img src="{{asset('storage').'/'.$producto->Foto}}" width="100" alt="">
            </td>

            <td>{{$producto->Nombre}}</td>
            <td>{{$producto->Precio}}</td>
            <td>{{$producto->Descripcion}}</td>
            <td>{{$producto->Marca}}</td>
            <td>{{$producto->Distribuidora}}</td>
            <td>{{$producto->TipoProducto}}</td>
            <td>{{$producto->FechaFabricacion}}</td>
            <td>{{$producto->FechaVencimiento}}</td>
            <td>
                <a href="{{url('/producto/'.$producto->id.'/edit')}}">
                    Editar
                </a>

                |

                <form action="{{url('/producto/'.$producto->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>

            </th>
        </tr>
        @endforeach

    </tbody>

</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

