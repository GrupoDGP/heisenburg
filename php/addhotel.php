<div id = "tituloComentarios">
	<h1> PROCEDIMIENTO AGREGAR HOTEL </h1>
</div>
<div id="formularioContacto">

    <form method="post" action="index.php?page=addhotel" >
        <table id="tablaformulario">
            <tr>
                <td> <label> Nombre: </label> </td>
                <td> <input type="text" name="nombre"  placeholder="Introduce nombre hotel."  required="true" autofocus> </input> </td>
            
                <td><label > Precio: </label> </td>
                <td><input type="number" name="precio"  placeholder="precio minimo." required="true" > </input> </td>
            </tr>
            <tr>
                <td><label > Direccion: </label></td>
                <td><input type="text" name="direccion" placeholder="Introduce direccion hotel." required="true"> </input></td>
            
                <td><label> Estrellas: </label> </td>
                <td><input type="number" min="1" max="5" name="estrellas"  placeholder="Introduce el numero de estrellas." required="true" > </input> </td>
            </tr>
            <tr>
                <td><label > Telefono: </label> </td>
                <td><input type="number" name="telefono" placeholder="Introduce el telefono del hotel." required="true"></input>  </td>
            
                <td><label > Email: </label> </td>
                <td><input type="email" name="email"  placeholder="Introduce email del hotel." required="true"> </input> </td>
            </tr>
            <tr>
                <td><label > Imagenes: </label> </td>
                <td>
                    <input type="text" name="Imagene1"  placeholder="Introduce la ruta de la imagen1"></input>
                    <input type="text" name="Imagene2"  placeholder="Introduce la ruta de la imagen2"></input>
                    <input type="text" name="Imagene3"  placeholder="Introduce la ruta de la imagen3"></input>
                    <input type="text" name="Imagene4"  placeholder="Introduce la ruta de la imagen4"></input>
                </td>
            
                <td><label> Video: </label> </td>
                <td><input type="text" name="Video"  placeholder="Introduce la url del video explicativo."></input>  </td>
            </tr>
            <tr>
                <td><label> Tipo de alojameinto: </label> </td>
                <td><select name="tipo">
                        <option value="hotel">hotel</option>
                        <option value="Casa Rural">Casa Rural</option>
                </td>
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
        $sql="insert into alojamientos(nombre,tipo,precio, direccion, estrellas, telefono, email, video) values ('$_REQUEST[nombre]','$_REQUEST[tipo]','$_REQUEST[precio]','$_REQUEST[direccion]','$_REQUEST[estrellas]','$_REQUEST[telefono]','$_REQUEST[email]','$_REQUEST[video]')";
        if ($dbhandler->query($sql) === TRUE) {
            echo "<script> alert(\"Hotel dado de alta\");</script>";
        } else {
            echo "Error: ".$dbhandler->error();
        }
        $dbhandler->close();
    }
?>
