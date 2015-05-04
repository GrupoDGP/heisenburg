<?php
//Clase Alojamiento

class Alojamiento{
    private $idAlojamiento;
    private $nombre;
    private $tipo; //string hotel o casa rural
    private $precio;
    private $direccion;
    private $estrellas; //0-5
    private $telefono;
    private $email;
    private $video;
    private $resumen;
    private $resumenCorto;
    private $imagen1;
    private $imagen2;
    private $imagen3;
    private $imagen4;

    //se le pasa una "row" del query
    public function read_hotel($row){
        $this->idAlojamiento=$row["idAlojamiento"];
        $this->nombre=$row["nombre"];
        $this->tipo=$row["tipo"];
        $this->precio=$row["precio"];
        $this->direccion=$row["direccion"];
        $this->estrellas=$row["estrellas"]; //0-5
        $this->telefono=$row["telefono"];
        $this->email=$row["email"];
        $this->video=$row["video"];
        $this->resumen=$row["resumen"];
        $this->resumenCorto=$row["resumenCorto"];
        $this->imagen1=$row["imagen1"];
        $this->imagen2=$row["imagen2"];
        $this->imagen3=$row["imagen3"];
        $this->imagen4=$row["imagen4"];
    }


    public function mostrarInformacionReducida(){
        echo "<a class=\"enlace\" href=\"./index.php?page=".$this->idAlojamiento."\"  >";
        echo "<h2 id=\"nombre_hotel\"> ".$this->tipo." ".$this->nombre." <br>";
        echo "Precio: ".$this->precio." €";
        echo "</h2><br>";
        echo "<div id =\"foto_hotel\">";
        echo "<img id=\"foto_hotel\" src = \"".$this->imagen1."\">";
        echo "</div>";
        echo "<div>";
        echo "<p>".$this->resumenCorto."</p>";
        echo "</div>";
        echo "</a>";
    }

}
//devuelve todas los alojameintos en un array dada una query
function leer_alojamientos($query,$dbhandler){
    $dbhandler->connect();
    $table=$dbhandler->query($query);
    $result=array();
    if ($table->num_rows > 0) {
        // output data of each row
        while($row = $table->fetch_assoc()) {
            $alojamiento=new Alojamiento;
            $alojamiento->read_hotel($row);
            $result[]=$alojamiento;
        }
    } else {
        echo "no results";
    }
    $dbhandler->close();
    return $result;
}

//devuelve unicamente el hotel de id dado
function leer_alojamiento($id,$dbhandler){
    $res=$dbhandler->query("SELECT * FROM `alojamientos` WHERE `idAlojamiento`=".$id);
    if ($res->num_rows > 0){
        $row=$res->fetch_assoc();
        $alojamiento=new Alojamiento;
        $alojamiento->read_hotel($row);
        return $alojamiento;
    }else {
        echo "no results";
        return FALSE;
    }
}
?>
