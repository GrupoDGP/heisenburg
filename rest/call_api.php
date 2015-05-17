<?php
  //next example will recieve all messages for specific conversation
  //example from https://support.ladesk.com/061754-How-to-make-REST-calls-in-PHP
$service_url = 'http://localhost/heisenburg/rest/api.php?rquest=hoteles';

echo "test</br>";
$resp = file_get_contents($service_url);
echo $resp;
 //$hotels = json_decode($resp, true);
//echo "test2</br>";
//echo $hotels["msg"];

/*
$cu = curl_init($service_url);

//curl_setopt($curl, CURLOPT_HTTPGET, true);
$curl_response = curl_exec($cu);
if ($curl_response === false) {
    $info = curl_getinfo($cu);
    curl_close($cu);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
else curl_close($curl);
echo "response</br>";
var_dump(json_decode($curl_response, true));
echo "response2</br>";
//$decoded = json_decode($curl_response);
//var_dump
if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
die('error');
    die('error occured: ' . $decoded->response->errormessage);
}
echo 'response ok!</br>';
echo $decoded->status;
echo $decoded->msg;*/
//echo 'export:';
//var_export($decoded->response);

?>
