<?php
public function processApi() {
	$func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
	if((int)method_exists($this,$func) > 0)
		$this->$func();
	else
		$this->response('',404); // Page not Found
}
private function hoteles(){
		if($this->get_request_method() != "GET"){
		$this->response('',406);
	}
	$respuesta= array("status" => "Success","msg" => "Hotel Super Chulo");
	$this->response($this->json($respuesta),200);
	/*/$id = (int)$this->_request['id']; // _request es rellenado previamente
	/if($id > 0) {
		mysql_query("DELETE FROM users WHERE user_id = $id");
		$success = array("status" => "Success","msg" => "Successfully one record deleted.");
		$this->response($this->json($success),200);
	}
	else {
		$this->response('',204); // If no records "No Content" status
	}*/

}

/*
private function deleteUser() {
	// Comprobamos que se ha usado el método DELETE en la llamada HTTP
	if($this->get_request_method() != "DELETE"){
		$this->response('',406);
	}
	$id = (int)$this->_request['id']; // _request es rellenado previamente
	if($id > 0) {
		mysql_query("DELETE FROM users WHERE user_id = $id");
		$success = array("status" => "Success","msg" => "Successfully one record deleted.");
		$this->response($this->json($success),200);
	}
	else {
		$this->response('',204); // If no records "No Content" status
	}
}*/
?>

