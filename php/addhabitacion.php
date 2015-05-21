<div id = "tituloComentarios">
	<h1> PROCEDIMIENTO AGREGAR HABITACION </h1>
</div>
<?php
					
	$dbhandler = new db_handler("localhost","root","heisenburg");
	$tipo="select nombre from `alojamientos`";
	$dbhandler->connect();
	$consulta=$dbhandler->query($tipo);
?>

<div id="formularioContacto">
    <form method="post" action="index.php?page=addhotel" >
        <table id="tablaformulario">
            <tr>
                <td> <label> Nº de camas: </label> </td>
                <td> <input type="text" name="camas"  placeholder="Introduce # de camas"  required="true" autofocus> </input> </td>
				
                <td><label> Nombre Alojamiento: </label> </td>
                <td><select name="alojamiento"> 	
                    <?php
					
						while( $res = $consulta->fetch_assoc() )
							echo '<option value="hotel">'.$res['nombre'].'</option>';
					
					?>
                </td>
            </tr>
            <tr>
                <td><label > Precio: </label> </td>
                <td><input type="number" name="precio"  placeholder="precio minimo." required="true" > </input> </td>
            </tr>
            
            <tr>
                <td><button type="submit" name="submit">Enviar</button></td>
            </tr>
        </table>

    </form>
</div>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        include "php/includes/dbhandler.php";
        $dbhandler = new db_handler("localhost","root","heisenburg");
        $dbhandler->connect();
        $sql="insert into habitacion(camas,precio, alojamiento) values ('$_REQUEST[camas]','$_REQUEST[precio]','$_REQUEST[alojamiento]')";
        if ($dbhandler->query($sql) === TRUE) {
            echo "<script> alert(\"Habitacion dada de alta\");</script>";
        } else {
            echo "Error: ".$dbhandler->error();
        }
        $dbhandler->close();
    }
?>