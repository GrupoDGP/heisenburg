<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
<link href="css/styles.css" rel="stylesheet" type = "text/css"/>

<?php
//ONLY FOR TESTING API rest
//Clase hotel 
class Hotel{
    public $idAlojamiento;
    public $nombre;
    public $precio;
    public $direccion;
    public $estrellas; //0-5
    public $telefono;
    public $email;
    public $resumen;
    public $imagen;

    //se le pasa una decoded JSON
    public function read_hotel($decoded){
        $this->idAlojamiento=$decoded["idAlojamiento"];
        $this->nombre=$decoded["nombre"];
        $this->precio=$decoded["precio"];
        $this->direccion=$decoded["direccion"];
        $this->estrellas=$decoded["estrellas"]; //0-5
        $this->telefono=$decoded["telefono"];
        $this->email=$decoded["email"];
        $this->resumen=$decoded["resumenCorto"];
        $this->imagen=$decoded["imagen1"];
    }


    public function mostrar(){
        echo "<h2> HOTEL ".$this->nombre." </h2>";
        echo "<h4>Precio desde: ".$this->precio." € </h4>";
        echo "<img src = \"http://127.0.0.1/heisenburg/".$this->imagen."\">";
        echo "<div>";
        echo "<p>".$this->resumen."</p>";
        echo "</div>";
    }
}
$service_url = "http://localhost/heisenburg/rest/hotel/2/2015-05-17/2015-05-23";//funcion de buscar alojameintos

$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //to return the content


$result = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
$decoded=json_decode($result,true);
//echo "Header:" . $httpcode . "</br>";
if($httpcode==200){

    foreach ($decoded as  $valor) {
        $h = new Hotel;
        $h->read_hotel($valor);
        $h->mostrar();
    }
}
else{
    echo "error Header:" . $httpcode . "</br>";
}
?>
