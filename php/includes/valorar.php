<?php
	//es llamado poruna funcion AJAX la cual le pasa por post la valoracion y la id del alojameinto
	//introducimos en la base de datos dicha tupla.
	if(isset($_POST["valor"]) && isset($_POST["idAlojamiento"])){
		require "dbhandler.php";
		$dbhandler = new db_handler("localhost","root","heisenburg");
		$dbhandler->connect();
		$sql="insert into valoracion(valor,idAlojamiento) values ('$_POST[valor]','$_POST[idAlojamiento]')";
		if ($dbhandler->query($sql) === TRUE) {
			echo "valoracion añadida";
		} else {
			echo "Error: ".$dbhandler->error();
		}
		$dbhandler->close();
	}
?>
