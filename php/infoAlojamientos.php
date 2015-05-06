<?php

if(isset($_GET['page'])){
        $idAlojameiento=$_GET['page'];
}
else{
    $idAlojameiento=1;
}

include "php/includes/dbhandler.php";
include "php/includes/alojamiento_class.php";
$dbhandler = new db_handler("localhost","root","heisenburg");
$alojamiento=leer_alojamiento($idAlojameiento,$dbhandler);
$alojamiento->mostrarInformacionAmpliada();


echo "<div class =\"comenta\">";
echo "<div id=\"tituloComentarios\"> <h2> Dejanos tu comentario.</h2> </div>";
    echo "<div class=\"comentaBueno\">";
    echo "<form method=\"post\" action=\"http://hello-canvas.es/index.php?viaje=contacto\" onsubmit=\"return validation(this);\">";
    	echo "<table id=\"tablaformulario\">";
    		echo "<tr>";
    			echo "<td><textarea type=\"textarea\" name=\"mensaje\" id=\"mensaje\" placeholder=\"Lo que mas te gusto\" rows=\"8\" cols=\"45\" ></textarea>  </td>";
                echo "</tr>";
                echo "</table>";
                echo "</form>";
    echo "</div> <!-- end comentaBueno-->";

    echo "<div class=\"comentaEnviar\">";
    echo "<a href=\"#\" > <img id=\"enviarComentario\" src=\"img/imgComentario.png\" height=\"100px\" width=\"120px\" alt=\"ImagenComentario\"> </a>";
    echo "</div><!-- end comentarioEnviar-->";

    echo "<div class=\"comentaMalo\">";
        echo "<form>";
            echo "<table id=\"tablaformulario\">";
                echo "<tr>";
                    echo "<td><textarea type=\"textarea\" name=\"mensaje\" id=\"mensaje\" placeholder=\"Lo que menos te gusto\" rows=\"8\" cols=\"45\" ></textarea>  </td>";
                echo "</tr>";
            echo "</table>";
        echo "</form>";
    echo "</div> <!-- end comentaMalo -->";

echo "</div> <!-- end comentarios -->";

include "php/includes/comentario_class.php";
$dbhandler = new db_handler("localhost","root","heisenburg");
$comentarios=leer_comentarios($idAlojameiento,$dbhandler);
mostrarComentarios($comentarios);
?>
