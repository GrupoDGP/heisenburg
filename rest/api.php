<?php
class api_rest{
public function process_api(){	
		echo $_REQUEST['rquest'];
		$func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
			if((int)method_exists($this,$func) > 0){
				$this->$func();
			}else{
				http_response_code(404);
				}
	}
	private function hotel(){
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
				$response=$this->get_hoteles($tipo,$fechainicio,$fechafin);
				http_response_code(200);
				echo json_encode($response);
			}
		}	
	}

	private function reserva(){
		if($_SERVER['REQUEST_METHOD']!="POST"){
			http_response_code(406);
		}
		else{
			if(!isset($_REQUEST['hotel']) || !isset($_REQUEST['tipo']) || !isset($_REQUEST['dni']) || !isset($_REQUEST['finicio']) || !isset($_REQUEST['ffin'])){
			http_response_code(204);
		}
		else {
				$tipo = strtolower(trim(str_replace("/","",$_REQUEST['tipo'])));
				$fechainicio = strtolower(trim(str_replace("/","",$_REQUEST['finicio'])));
				$fechafin = strtolower(trim(str_replace("/","",$_REQUEST['ffin'])));
				$hotel=strtolower(trim(str_replace("/","",$_REQUEST['hotel'])));
				$dni=strtolower(trim(str_replace("/","",$_REQUEST['dni'])));
				$response=$this->reserva_habitacion($tipo,$fechainicio,$fechafin,$dni,$hotel);
				if($response==true) http_response_code(200);
				else http_response_code(204);
		}


		}
			
	}

	private function get_hoteles($tipo,$fecha_inicio,$fecha_fin){
	//peticion de hoteles con tipo y dos fechas
	$response= array("tipo" => $tipo, "fechainicio"=> $fecha_inicio, "fechafin"=>$fecha_fin);
	//MODIFICAR RESPONSE!!
	return $response;
	}
	private function reserva_habitacion($tipo,$fecha_inicio,$fecha_fin,$dni,$hotel){
	//reserva habitacion
	return true; //return false si falla
	}

}
$api=new api_rest();
$api->process_api();
?>

