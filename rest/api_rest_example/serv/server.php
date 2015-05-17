<?php

//$num1 = $_REQUEST['num1'];
//$num2 = $_REQUEST['num2'];

//$total = $num1 + $num2;
$respuesta= array("status" => $_SERVER['REQUEST_METHOD'],"msg" => "Hotel Super Chulo");
echo json_encode($respuesta);
?>
