<h1> Procedimiento añadir hotel </h1>
<div id="formularioContacto">

    <form method="post" action="index.php?page=addhotel" >
        <table id="tablaformulario">
            <tr>
                <td> <label for="nombre"> Nombre: </label> </td>
                <td> <input type="text" name="nombre" id="nombre" placeholder="Introduce nombre hotel."  autofocus="autofocus"> </input> </td>
            </tr>
            <tr>
                <td><label for="precio"> Precio: </label> </td>
                <td><input type="number" name="precio" id="precio" placeholder="precio minimo." > </input> </td>
            </tr>
            <tr>
                <td><label for="direccion"> Direccion: </label></td>
                <td><input type="text" name="direccion" id="direccion" placeholder="Introduce direccion hotel." > </input></td>
            </tr>
            <tr>
                <td><label for="estrellas"> Estrellas: </label> </td>
                <td><input type="number" name="estrellas" id="estrellas" placeholder="Introduce el numero de estrellas." > </input> </td>
            </tr>
            <tr>
                <td><label for="Telefono"> Telefono: </label> </td>
                <td><input type="text" name="telefono" id="telefono" placeholder="Introduce el telefono del hotel." required="true"></input>  </td>
            </tr>
            <tr>
                <td><label for="email"> Email: </label> </td>
                <td><input type="email" name="email" id="email" placeholder="Introduce email del hotel." > </input> </td>
            </tr>
            <tr>
                <td><label for="Video"> Video: </label> </td>
                <td><input type="url" name="Video" id="Video" placeholder="Introduce la url del video explicativo."></input>  </td>
            </tr>
            <tr>
                <td><label for="Imagenes"> Imagenes: </label> </td>
                <td>
                    <input type="text" name="Imagene1" id="Imagene1" placeholder="Introduce la ruta de la imagen1"></input>
                    <input type="text" name="Imagene2" id="Imagene2" placeholder="Introduce la ruta de la imagen2"></input>
                    <input type="text" name="Imagene3" id="Imagene3" placeholder="Introduce la ruta de la imagen3"></input>
                    <input type="text" name="Imagene4" id="Imagene4" placeholder="Introduce la ruta de la imagen4"></input>

                </td>
            </tr>
            <tr>
                <td><label for="tipo"> Tipo de alojameinto: </label> </td>
                <td><select name="tipo" id="tipo">
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
        $conexion=mysql_connect("localhost","root","")
        or die("Problemas en la conexion");
        mysql_select_db("heisenburg",$conexion) or
        die("Problemas en la seleccion de la base de datos");
        mysql_query("insert into alojamientos(nombre,tipo,precio, direccion, estrellas, telefono, correo, video) values ". "('$_REQUEST[nombre]','$_REQUEST[tipo]','$_REQUEST[precio]','$_REQUEST[direccion]','$_REQUEST[estrellas]','$_REQUEST[telefono]','$_REQUEST[correo]','$_REQUEST[video]')",
        $conexion) or die("Problemas en el select".mysql_error());
        mysql_close($conexion);
        echo "<script> alert(\"hotel añadido\");</script>";
    }
?>
