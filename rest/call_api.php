<?php
  //next example will recieve all messages for specific conversation
  //example from https://support.ladesk.com/061754-How-to-make-REST-calls-in-PHP
$service_url = 'localhost/heisenburg/rest/hoteles/';
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);
if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
die('error');
   // die('error occured: ' . $decoded->response->errormessage);
}
echo 'response ok!';
echo $decoded->response;
echo 'export:';
var_export($decoded->response);

?>
