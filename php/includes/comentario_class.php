<?php
//Clase Comentario

class Comentario{
    private $idAlojamiento;
    private $idComentario;
    private $comentarioBueno;
    private $comentarioMalo;


    //se le pasa una "row" del query
    public function readComentario($row){
        $this->idAlojamiento=$row["idAlojamiento"];
        $this->idComentario=$row["idComentario"];
        $this->comentarioBueno=$row["comentarioBueno"];
        $this->comentarioMalo=$row["comentarioMalo"];
    }

    public function mostrarcomentarioBueno(){
        echo "<p> <img id=\"valoracion4\" src=\"img/valorar/muybien.png\" height=\"20px\" width=\"20px\" alt=\"comentarioBuena\" title=\"comentarioBuena\"><b>  Lo bueno: </b> ".$this->comentarioBueno."</p>";
    }
    public function mostrarcomentarioMalo(){
        echo "<p> <img id=\"valoracion4\" src=\"img/valorar/mal.png\" height=\"20px\" width=\"20px\" alt=\"comentarioMala\" title=\"comentarioMala\"><b>  Lo malo: </b> ".$this->comentarioMalo."</p>";
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
                echo "<p> <b>Nombre: </b>   Anonimo</p>";//poner usuaro de la sesion //TODO
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
    $dbhandler->connect();
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
    $dbhandler->close();
    return $result;
}
?>
