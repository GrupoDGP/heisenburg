<?php
include "php/includes/dbhandler.php";
include "php/includes/alojamiento_class.php";
$dbhandler = new db_handler("localhost","root","heisenburg");
$dbhandler->connect();
$query="SELECT * FROM `alojamientos`";
$alojamientos=leer_alojamientos($query,$dbhandler);
$size=count($alojamientos);
for($i = 0; $i<$size; $i++) {
    if($i%2==0){
        echo "<div class = \"hotel_izquierda\">";
        $alojamientos[$i]->mostrarInformacionReducida();
        echo "</div><!-- end hotel_izquierda -->";
    }
    else{
        echo "<div class = \"hotel_derecha\">";
        $alojamientos[$i]->mostrarInformacionReducida();
        echo "</div><!-- end hotel_derecha -->";
    }
}
$dbhandler->close();

?>
