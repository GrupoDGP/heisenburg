<div id = "tituloComentarios">
	<h1> PROCEDIMIENTO AGREGAR HOTEL </h1>
</div>

<div id="formularioContacto">

    <form method="post" action="index.php?page=addhotel" >
        <table id="tablaformulario">
            <tr>
                <td> <label> Nombre: </label> </td>
                <td> <input type="text" name="nombre"  placeholder="Introduce nombre habitacion."  required="true" autofocus> </input> </td>

                <td><label > Precio: </label> </td>
                <td><input type="number" name="precio"  placeholder="precio minimo." required="true" > </input> </td>
            </tr>
            <tr>
                <td><label > Direccion: </label></td>
                <td><input type="text" name="direccion" placeholder="Introduce direccion habitacion." required="true"> </input></td>
            	
                
            
            </tr>
            
            <tr>
                <td><button type="submit" name="submit">Enviar</button></td>
            </tr>
        </table>

    </form>
</div>