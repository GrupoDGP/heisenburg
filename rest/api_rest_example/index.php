<?php
  //next example will recieve all messages for specific conversation
  //example from https://support.ladesk.com/061754-How-to-make-REST-calls-in-PHP
echo "test</br>";
$service_url = "http://localhost/api_rest/serv/server.php";
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //to return the content
//curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE"); //for any other than get or post
//curl_setopt($curl, CURLOPT_POST, true); //for post
$result = curl_exec($curl);
curl_close($curl);
$decoded=json_decode($result,true);
echo $decoded["msg"];
echo "</br>" . $decoded["status"] . "</br>";
 //$hotels = json_decode($resp, true);
echo "end test";

?>
