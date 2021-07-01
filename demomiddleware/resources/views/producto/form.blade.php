<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{isset($producto->Nombre)?$producto->Nombre:''}}" id="Nombre">
    <br>

    <label for="Precio">Precio</label>
    <input type="text" name="Precio" value="{{isset($producto->Precio)?$producto->Precio:''}}" id="Precio">
    <br>

    <label for="Descripcion">Descripción</label>
    <input type="text" name="Descripcion" value="{{isset($producto->Descripcion)?$producto->Descripcion:''}}" id="Descripcion">
    <br>

    <label for="Marca">Marca</label>
    <input type="text" name="Marca" value="{{isset($producto->Marca)?$producto->Marca:''}}" id="Marca">
    <br>

    <label for="Distribuidora">Distribuidora</label>
    <input type="text" name="Distribuidora" value="{{isset($producto->Distribuidora)?$producto->Distribuidora:''}}" id="Distribuidora">
    <br>

    <label for="TipoProducto">Tipo de producto</label>
    <input type="text" name="TipoProducto" value="{{isset($producto->TipoProducto)?$producto->TipoProducto:''}}" id="TipoProducto">
    <br>

    <label for="FechaFabricacion">Fecha de Elavoración</label>
    <input type="text" name="FechaFabricacion" value="{{isset($producto->FechaFabricacion)?$producto->FechaFabricacion:''}}" id="FechFabricacion">
    <br>

    <label for="FechaVencimiento">Fecha de vencimiento</label>
    <input type="text" name="FechaVencimiento" value="{{isset($producto->FechaVencimiento)?$producto->FechaVencimiento:''}}" id="FechaVencimiento">
    <br>

    <label for="Foto">Foto</label>
    @if(isset($producto->Foto))
        <img src="{{asset('storage').'/'.$producto->Foto}}" width="100" alt="">
    @endif
    <input type="file" name="Foto" value="" id="Foto">
    <br>

    <input type="submit" value="Guardar datos">

    <a href="{{url('producto/')}}">Regresar</a>

    <br>
