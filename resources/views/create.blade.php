<h1>Crear Cliente</h1>
<!--<form action="{{ url('cliente') }}" method="post">-->
<form action="{{  }}" method="post">
    
     @csrf 
        <input type="text" id="nombre" placeholder="nombre">
        <input type="text" id="apellidos" placeholder="apellidos">
        <input type="date" id=fechaNacimiento"" placeholder="fechaNacimiento">
        <input type="text" id="correo" placeholder="correo">
        <input type="text" id="telefono" placeholder="telefono">
        <input type="text" id="direccion" placeholder="direccion">
        <input type="text" id="estadoCivil" placeholder="estadoCivil">
    
        <input type="submit" value="Crear" >

</form>