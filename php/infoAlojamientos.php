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

echo "<div class =\"comentarios\">";
echo "<div id=\"tituloComentarios\"> <h2> Comentarios</h2> </div>";

echo "<div class=\"comentario\">";
    echo "<p> <b>Nombre: </b>   Pijus Magnificus</p>";
    echo "<p> <b>Valoración: </b>  <img id=\"valoracion4\" src=\"img/valorar/mal.png\" height=\"25px\" width=\"25px\" alt=\"valoracionMala\" title=\"valoracionMala\">  </p>";
    echo "<p> <b>Lo bueno: </b> Un hotel fantastico.... blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla
	blablabla blablabla blablabla blablabla blablabla</p>";
    echo "<p> <b>Lo malo: </b> No me ha gustado el hotel,blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla!!!</p>";
echo "</div>";
echo "<div class=\"comentario\">";
    echo "<p> <b>Nombre: </b>   Gregorio</p>";
    echo "<p> <b>Valoración: </b>   <img id=\"valoracion4\" src=\"img/valorar/muybien.png\" height=\"25px\" width=\"25px\" alt=\"valoracionMala\" title=\"valoracionMala\"> </p>";
    echo "<p> <b>Lo bueno: </b> Un hotel fantastico.... blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla
	blablabla blablabla blablabla blablabla blablabla</p>";
    echo "<p> <b>Lo malo: </b> No me ha gustado el hotel, blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla!!!</p>";

echo "</div>";
echo "</div>";

?>
