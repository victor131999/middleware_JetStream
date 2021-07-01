Mostrar la lista de productos :c
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
            <th>{{$producto->Foto}}</th>
            <th>{{$producto->Nombre}}</th>
            <th>{{$producto->Precio}}</th>
            <th>{{$producto->Descripcion}}</th>
            <th>{{$producto->Marca}}</th>
            <th>{{$producto->Distribuidora}}</th>
            <th>{{$producto->TipoProducto}}</th>
            <th>{{$producto->FechaFabricacion}}</th>
            <th>{{$producto->FechaVencimiento}}</th>
            <th>
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
