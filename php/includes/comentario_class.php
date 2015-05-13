<?php
//Clase Comentario

class Comentario{
    private $idAlojamiento;
    private $idComentario;
    private $comentarioBueno;
    private $comentarioMalo;
    private $usuario;


    //se le pasa una "row" del query
    public function readComentario($row){
        $this->idAlojamiento=$row["idAlojamiento"];
        $this->idComentario=$row["idComentario"];
        $this->comentarioBueno=$row["comentarioBueno"];
        $this->comentarioMalo=$row["comentarioMalo"];
        $this->usuario=$row["usuario"];
    }

    public function mostrarcomentarioBueno(){
        echo "<p> <img id=\"valoracion4\" src=\"img/valorar/muybien.png\" height=\"20px\" width=\"20px\" alt=\"comentarioBuena\" title=\"comentarioBuena\"><b>  Lo bueno: </b> ".$this->comentarioBueno."</p>";
    }
    public function mostrarcomentarioMalo(){
        echo "<p> <img id=\"valoracion4\" src=\"img/valorar/mal.png\" height=\"20px\" width=\"20px\" alt=\"comentarioMala\" title=\"comentarioMala\"><b>  Lo malo: </b> ".$this->comentarioMalo."</p>";
    }

    public function mostrarUsuario(){
        echo "<p> <b>Nombre: </b>".$this->usuario."</p>";
    }
}

//mostrar una lista de comentarios
function mostrarComentarios($comentarios){
    $size=count($comentarios);
    if($size>0){
        echo "<div class =\"comentarios\">";
        echo "<div id=\"tituloComentarios\"> <h2> Comentarios</h2> </div>";
        for($i = 0; $i<$size; $i++) {
            echo "<div class=\"comentario\">";
                $comentarios[$i]->mostrarUsuario();
                $comentarios[$i]->mostrarcomentarioBueno();
                $comentarios[$i]->mostrarcomentarioMalo();
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
    }
}

//devuelve todas los alojameintos en un array dada una query
function leer_comentarios($id,$dbhandler){

    $table=$dbhandler->query("SELECT * FROM `comentario` WHERE `idAlojamiento`=".$id);
    $result=array();
    if ($table->num_rows > 0) {
        // output data of each row
        while($row = $table->fetch_assoc()) {
            $Comentario=new Comentario;
            $Comentario->readComentario($row);
            $result[]=$Comentario;
        }
    }

    return $result;
}

function mostrarFormularioComentario($idAlojameiento,$dbhandler){
    echo "<div class =\"comenta\">";
        echo "<div id=\"tituloComentarios\"> <h2> Dejanos tu comentario.</h2> </div>";
        echo "<form method=\"post\" action=\"index.php?page=".$idAlojameiento."\">";
        	echo "<table id=\"tablaformulario\">";
        		echo "<tr>";
        			echo "<td><textarea type=\"textarea\" name=\"mensajeBueno\" placeholder=\"Lo que mas te gusto\" rows=\"8\" cols=\"45\" ></textarea>  </td>";

                    echo "<td><img src=\"img/imgComentario.png\" height=\"100px\" width=\"120px\" alt=\"ImagenComentario\"></td>";

                    echo "<td><textarea type=\"textarea\" name=\"mensajeMalo\" placeholder=\"Lo que menos te gusto\" rows=\"8\" cols=\"45\" ></textarea>  </td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<button type=\"submit\" name=\"submit\">Enviar</button>";
                echo "</tr>";
            echo "</table>";
        echo "</form>";

    echo "</div> <!-- end comenta -->";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $sql="insert into comentario(comentarioBueno,comentarioMalo,idAlojamiento) values ('$_REQUEST[mensajeBueno]','$_REQUEST[mensajeMalo]','$idAlojameiento')";
        if ($dbhandler->query($sql) === TRUE) {
            echo "<script> alert(\"comentario dado de alta\");</script>";
        } else {
            echo "Error: ".$dbhandler->error();
        }

    }
}
?>
