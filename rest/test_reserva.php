<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
<link href="css/styles.css" rel="stylesheet" type = "text/css"/>
<?php


//ONLY FOR TESTING API rest


$service_url = "http://localhost/heisenburg/rest/reserva/2/2015-05-17/2015-05-23/antonio/5";//funcion de reservar alojameinto


$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //to return the content


$result = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
$decoded=json_decode($result,true);
if($httpcode==200){
    echo "reserva realizada correctamente</br>";
}
else{
    if($httpcode==204){
        echo "no hay habitaciones disponibles</br>";
    }
    else{
        echo "error Header:" . $httpcode . "</br>";
    }

}
?>
