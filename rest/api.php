<?php
class api_rest{
public function process_api(){	

		$func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
			if((int)method_exists($this,$func) > 0){
				$this->$func();
			}else{
				http_response_code(404);
				}
	}
	private function hoteles(){
		if($_SERVER['REQUEST_METHOD']!="GET"){
			http_response_code(406);
		}
		else{
			if(!isset($_REQUEST['tipo']) || !isset($_REQUEST['finicio']) || !isset($_REQUEST['ffin'])){
				http_response_code(204);
			}
			else{
				$tipo = strtolower(trim(str_replace("/","",$_REQUEST['tipo'])));
				$fechainicio = strtolower(trim(str_replace("/","",$_REQUEST['finicio'])));
				$fechafin = strtolower(trim(str_replace("/","",$_REQUEST['ffin'])));
				http_response_code(200);
				$response= array("tipo" => $tipo, "fechainicio"=> $fechainicio, "fechafin"=>$fechafin);
				echo json_encode($response);
			}
	
		}	
	}

}
$api=new api_rest();
$api->process_api();
?>

