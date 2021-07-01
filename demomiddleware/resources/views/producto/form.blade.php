<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{$producto->Nombre}}" id="Nombre">
    <br>

    <label for="Precio">Precio</label>
    <input type="text" name="Precio" value="{{$producto->Precio}}" id="Precio">
    <br>

    <label for="Descripcion">Descripción</label>
    <input type="text" name="Descripcion" value="{{$producto->Descripcion}}" id="Descripcion">
    <br>

    <label for="Marca">Marca</label>
    <input type="text" name="Marca" value="{{$producto->Marca}}" id="Marca">
    <br>

    <label for="Distribuidora">Distribuidora</label>
    <input type="text" name="Distribuidora" value="{{$producto->Distribuidora}}" id="Distribuidora">
    <br>

    <label for="TipoProducto">Tipo de producto</label>
    <input type="text" name="TipoProducto" value="{{$producto->TipoProducto}}" id="TipoProducto">
    <br>

    <label for="FechaFabricacion">Fecha de Elavoración</label>
    <input type="text" name="FechaFabricacion" value="{{$producto->FechaFabricacion}}" id="FechFabricacion">
    <br>

    <label for="FechaVencimiento">Fecha de vencimiento</label>
    <input type="text" name="FechaVencimiento" value="{{$producto->FechaVencimiento}}" id="FechaVencimiento">
    <br>

    <label for="Foto">Foto</label>
    <img src="{{asset('storage').'/'.$producto->Foto}}" alt="">
    <input type="file" name="Foto" value="" id="Foto">
    <br>

    <input type="submit" value="Guardar datos">
    <br>
