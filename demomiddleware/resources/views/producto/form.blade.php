@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$modo}}Producto</h1>

@stop

@section('content')

    <div class="form-gourp">

        @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <label for="Nombre">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="{{isset($producto->Nombre)?$producto->Nombre:old('Nombre')}}" id="Nombre">


        <label for="Precio">Precio</label>
        <input type="text" class="form-control" name="Precio" value="{{isset($producto->Precio)?$producto->Precio:old('Precio')}}" id="Precio">


        <label for="Descripcion">Descripción</label>
        <input type="text"class="form-control" name="Descripcion" value="{{isset($producto->Descripcion)?$producto->Descripcion:old('Descripcion')}}" id="Descripcion">


        <label for="Marca">Marca</label>
        <input type="text" class="form-control" name="Marca" value="{{isset($producto->Marca)?$producto->Marca:old('Marca')}}" id="Marca">


        <label for="Distribuidora">Distribuidora</label>
        <input type="text" class="form-control" name="Distribuidora" value="{{isset($producto->Distribuidora)?$producto->Distribuidora:old('Distribuidora')}}" id="Distribuidora">


        <label for="TipoProducto">Tipo de producto</label>
        <input type="text" class="form-control" name="TipoProducto" value="{{isset($producto->TipoProducto)?$producto->TipoProducto:old('TipoProducto')}}" id="TipoProducto">

        <label for="FechaFabricacion">Fecha de Elavoración</label>
        <input type="text" class="form-control" name="FechaFabricacion" value="{{isset($producto->FechaFabricacion)?$producto->FechaFabricacion:old('FechaFabricacion')}}" id="FechFabricacion">


        <label for="FechaVencimiento">Fecha de vencimiento</label>
        <input type="text" class="form-control" name="FechaVencimiento" value="{{isset($producto->FechaVencimiento)?$producto->FechaVencimiento:old('FechaVencimiento')}}" id="FechaVencimiento">



        @if(isset($producto->Foto))
            <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$producto->Foto}}" width="100" alt="">
        @endif
        <input  type="file" name="Foto" value="" id="Foto">

        <br/>

        <input class="btn btn-outline-success" type="submit" value="{{$modo}} datos">
        <a href="{{url('producto/')}}">Regresar</a>

    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




