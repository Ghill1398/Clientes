<table border="1">
    @foreach ($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->modelo}}</td>
            <td>{{$cliente->idfabricante}}</td>
            <td>{{$cliente->fabricante->id}}</td>
            <td>{{$cliente->fabricante->nombre}}</td>
            <td>{{$cliente->fabricante->pais}}</td>
            <a href="{{ url('cliente/') }}">Ver cliente</a>
            <a href="{{ url('cliente/destroy') }}">Borrar cliente</a>
        </tr>
        
    @endforeach
</table>
<a href="{{ url('cliente/create') }}">Agregar cliente</a>
