<?php

if(isset($_GET['page'])){
        $idAlojameiento=$_GET['page'];
}
else{
    $idAlojameiento=1;
}

include "./php/includes/alojamiento_class.php";
$dbhandler = new db_handler("localhost","root","heisenburg");
$dbhandler->connect();
$alojamiento=leer_alojamiento($idAlojameiento,$dbhandler);
$alojamiento->mostrarInformacionAmpliada($dbhandler);

include "./php/includes/comentario_class.php";
mostrarFormularioComentario($idAlojameiento,$dbhandler);
$comentarios=leer_comentarios($idAlojameiento,$dbhandler);
mostrarComentarios($comentarios);
$dbhandler->close();
?>
