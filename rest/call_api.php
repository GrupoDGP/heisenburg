<?php
$service_url = 'localhost/heisenburg/rest/hoteles/';
       $curl = curl_init($service_url);
       $curl_post_data = array(
            "user_id" => 42,
            "emailaddress" => 'lorna@example.com',
            );
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POST, true);
       curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
       $curl_response = curl_exec($curl);
       curl_close($curl);
 
       $xml = new SimpleXMLElement($curl_response);
       
       /////////
       //next example will recieve all messages for specific conversation
//$service_url = 'http://example.com/api/conversations/[CONV_CODE]/messages&apikey=[API_KEY]';
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
   // die('error occured: ' . $decoded->response->errormessage);
}
echo 'response ok!';
echo $decoded->response->msg;
echo 'export:';
var_export($decoded->response);

?>
