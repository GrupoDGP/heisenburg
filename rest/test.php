<?php
//ONLY FOR TESTING
echo "test</br>";
$service_url = "http://localhost/heisenburg/rest/hotel/2/2015-05-17/2015-05-23";//funcion de buscar alojameintos

//$service_url = "http://localhost/heisenburg/rest/reserva/2/2015-05-17/2015-05-23/antonio/5";//funcion de reservar alojameinto

//$service_url = "http://localhost/heisenburg/rest/api.php?rquest=hotel&tipo=5&finicio=24/1/2011&ffin=12/7/2011";
//$service_url="http://localhost/heisenburg/rest/api.php?rquest=reserva&tipo=5&finicio=24/1/2011&ffin=12/7/2011&dni=7777&hotel=peepe";
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //to return the content
//curl_setopt($ch, CURLOPT_VERBOSE, true);
//curl_setopt($ch, CURLOPT_HEADER, true);


//curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE"); //for any other than get or post
//curl_setopt($curl, CURLOPT_POST, true); //for post
$result = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
$decoded=json_decode($result,true);
echo "Header:" . $httpcode . "</br>";
//echo $decoded["tipo"] . "</br>";
//echo $decoded["fechainicio"] . "</br>";
//echo $decoded["fechafin"] . "</br>";
echo $result;
echo "</br>end test";
?>
