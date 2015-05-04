<div id = "tituloComentarios">
	<h1> REGISTRO </h1>
</div>

<div id="formularioContacto">
    <form method="post" action="index.php?page=registro" >
        <table id="tablaformulario">
            <tr>
                <td> <label > Nombre: </label> </td>
                <!-- no se si se pueden utilizar los required, en cualquier caso he creado el script required="required"-->
                <td> <input type="text" name="nombre"  placeholder="Introduce nombre."  required="true" autofocus> </input> </td>
            
                <td><label> Apellidos: </label> </td>
                <td><input type="text" name="apellidos" placeholder="Introduce apellidos." required="true"> </input> </td>
            </tr>
            <tr>
                <td><label > DNI: </label></td>
                <td><input type="text" name="dni"placeholder="Introduce DNI." required="true" > </input></td>
            
                <td><label > Usuario: </label> </td>
                <td><input type="text" name="usuario" placeholder="Introduce nombre de usuario." required="true" > </input> </td>
            </tr>
            <tr>
                <td><label > Contraseña: </label> </td>
                <td><input type="password" name="password"  placeholder="Introduce contraseña." required="true"></input>  </td>
            
                <td><label > Email: </label> </td>
                <td><input type="email" name="email" placeholder="Introduce email." required="true"> </input> </td>
            </tr>

            <tr>
                <td><label> Tipo de usuario: </label> </td>
                <td><select name="tipo" id="desplegable">
                        <option value="Cliente">Cliente</option>
                        <option value="Hostelero">Hostelero</option>
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
        $sql="insert into usuarios(nombre,apellidos, dni, usuario, password, correo, tipo) values ('$_REQUEST[nombre]','$_REQUEST[apellidos]','$_REQUEST[dni]','$_REQUEST[usuario]','$_REQUEST[password]','$_REQUEST[email]','$_REQUEST[tipo]')";
        if ($dbhandler->query($sql) === TRUE) {
            echo "<script> alert(\"Usuario dado de alta\");</script>";
        } else {
            echo "Error: ".$dbhandler->error();
        }
        $dbhandler->close();
    }
?>
