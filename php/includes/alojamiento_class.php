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
    private $imagene1;
    private $imagene2;
    private $imagene3;
    private $imagene4;

    //se le pasa una "row" del query
    function read_hotel($row){
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
        $this->imagene1=$row["imagene1"];
        $this->imagene2=$row["imagene2"];
        $this->imagene3=$row["imagene3"];
        $this->imagene4=$row["imagene4"];
    }

}
//devuelve todas los alojameintos en un array dada una query
function leer_alojamiento($query,$dbhandler){
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
function leer_hotel($id,$dbhandler){
    $dbhandler->connect();
    $res=$dbhandler->query("SELECT * FROM ALOJAMIENTOS WHERE idAlojamiento='".$id ."'");
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
