<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "php/includes/alojamiento_class.php";
    $dbhandler = new db_handler("localhost","root","heisenburg");
    $dbhandler->connect();
    $tipo_Alojamiento;

    if(isset($_POST["hotel"])){
        $tipo_Alojamiento="hotel";
    }
    else{
        $tipo_Alojamiento="casa";
    }
    //echo "tipo aloja".$tipo_Alojamiento;
    //echo "precio ".$_REQUEST["precio"];
    //echo "tipo hab".$_REQUEST["tipohab"];
    //echo "tipo hab".$_REQUEST["fecha_entrada"];
    //echo "tipo hab".$_REQUEST["fecha_salida"];

    $alojamientos=buscar_alojamientos($_REQUEST[precio],$_REQUEST[tipohab],$tipo_Alojamiento,$dbhandler,$_REQUEST["fecha_entrada"],$_REQUEST["fecha_salida"]);
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
}
?>
