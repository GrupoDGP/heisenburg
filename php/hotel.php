<?php
//Clase Hotel

class Hotel{
    var $nombre;
    var $tipo; //string hotel o casa
    var $precio;
    var $calle;
    var $estrellas; //0-5
    var $ciudad;
    var $telefono;
    var $email;
    var $video;
    var $resumen;
    var $servicios;
    var $imagenes;

    //se le pasa una "row" del query
    function read_hotel($row){
        this->$nombre=$row["nombre"];
        this->$tipo=$row["tipo"];
        this->$precio=$row["precio"];
        this->$calle=$row["calle"];
        this->$estrellas=$row["estrellas"]; //0-5
        this->$ciudad=$row["ciudad"];
        this->$telefono=$row["tlfn"];
        this->$email=$row["email"];
        this->$video=$row["video"];
        this->$resumen=$row["resumen"];
        this->$servicios=$row["servicios"];
        this->$imagenes=$row["imagenes"];
    }

}
//devuelve un array de los hoteles de dicha query
function leer_hoteles($query,$dbhandler){
$dbhandler->connect();
$table=$dbhandler->query($query);
$result=array();
    if ($table->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $hotel=new Hotel;
            $hotel->read_hotel($row);
            $result[]=$hotel;
        }
    } else {
        echo "no results";
$dbhandler->close();
return $result;
}





?>
