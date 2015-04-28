<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
    $conexion=mysql_connect("localhost","root","")
    or die("Problemas en la conexion");
    mysql_select_db("heisenburg",$conexion) or
    die("Problemas en la seleccion de la base de datos");
    mysql_query("insert into usuarios(nombre,apellidos, dni, usuario, password, correo, tipo) values "
            . "('$_REQUEST[nombre]','$_REQUEST[apellidos]','$_REQUEST[dni]','$_REQUEST[usuario]','$_REQUEST[password]','$_REQUEST[email]','$_REQUEST[tipo]')",
    $conexion) or die("Problemas en el select".mysql_error());
    mysql_close($conexion);
    echo "El alumno fue dado de alta.";
?>

