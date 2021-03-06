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
		if($_SERVER['REQUEST_METHOD']!="GET"){
			http_response_code(406);
		}
		else{
			if(!isset($_REQUEST['hotel']) || !isset($_REQUEST['tipo']) || !isset($_REQUEST['username']) || !isset($_REQUEST['finicio']) || !isset($_REQUEST['ffin'])){
				http_response_code(204);
		}
		else {
				$tipo = strtolower(trim(str_replace("/","",$_REQUEST['tipo'])));
				$fechainicio = strtolower(trim(str_replace("/","",$_REQUEST['finicio'])));
				$fechafin = strtolower(trim(str_replace("/","",$_REQUEST['ffin'])));
				$hotel=strtolower(trim(str_replace("/","",$_REQUEST['hotel'])));
				$username=strtolower(trim(str_replace("/","",$_REQUEST['username'])));
				$response=$this->reserva_habitacion($tipo,$fechainicio,$fechafin,$username,$hotel);
				if($response==true){
					http_response_code(200);
					echo json_encode($response);
				}
				else http_response_code(204);
		}


		}

	}

	private function get_hoteles($tipo,$fecha_inicio,$fecha_fin){
		//peticion de hoteles con tipo y dos fechas
		//$response= array("tipo" => $tipo, "fechainicio"=> $fecha_inicio, "fechafin"=>$fecha_fin);
		include "../php/includes/alojamiento_class.php";
		$response=buscar_alojamientos_api_rest($tipo,$fecha_inicio,$fecha_fin);
		return $response;
	}
	private function reserva_habitacion($tipo,$fecha_inicio,$fecha_fin,$user,$hotel){
		include "../php/includes/alojamiento_class.php";
		$response=reserva_api_rest($tipo,$fecha_inicio,$fecha_fin,$user,$hotel);
		return $response;
	}

}
$api=new api_rest();
$api->process_api();
?>
