<?php
include "php/includes/dbhandler.php";
include "php/includes/alojamiento_class.php";
$dbhandler = new db_handler("localhost","root","heisenburg");
$dbhandler->connect();
    $id=1;
    echo "<div class = \"hotel_izquierda\">";
    $alojamento=leer_hotel($id,$dbhandler);
    $alojamento->mostrarInformacionReducida();
    echo "</div><!-- end hotel_izquierda -->";

    $id=5;
    echo "<div class = \"hotel_derecha\">";
    $alojamento=leer_hotel($id,$dbhandler);
    $alojamento->mostrarInformacionReducida();
    echo "</div><!-- end hotel_derecha -->";

    $id=6;
    echo "<div class = \"hotel_izquierda\">";
    $alojamento=leer_hotel($id,$dbhandler);
    $alojamento->mostrarInformacionReducida();
    echo "</div><!-- end hotel_izquierda -->";

    $id=7;
    echo "<div class = \"hotel_derecha\">";
    $alojamento=leer_hotel($id,$dbhandler);
    $alojamento->mostrarInformacionReducida();
    echo "</div><!-- end hotel_derecha -->";

    $id=8;
    echo "<div class = \"hotel_izquierda\">";
    $alojamento=leer_hotel($id,$dbhandler);
    $alojamento->mostrarInformacionReducida();
    echo "</div><!-- end hotel_izquierda -->";

    $id=9;
    echo "<div class = \"hotel_derecha\">";
    $alojamento=leer_hotel($id,$dbhandler);
    $alojamento->mostrarInformacionReducida();
    echo "</div><!-- end hotel_derecha -->";

    $dbhandler->close();
?>
