<h1> PROCEDIMIENTO DE RESERVA </h1>

<?php echo "<h3>Usted, ".$_SESSION['user']." va a reservar: "; ?>

<?php
	if(isset($_GET['id'])){
		$dbhandler = new db_handler("localhost","root","heisenburg");
		$dbhandler->connect();
		$res=$dbhandler->query("SELECT nombre,tipo FROM `alojamientos` WHERE `idAlojamiento`=".$_GET['id']);
		if ($res->num_rows > 0){
			$row=$res->fetch_assoc();
			echo $row["tipo"]." ".$row["nombre"]."</h3>";
		}
		else{
			echo "no results, problema en identificador del hotel";
		}
		$dbhandler->close();
	}
?>
<div>

	<?php
		echo "<form class = \"barra_sesion\" action=\"index.php?page=reservar&id=".$_GET['id']."\" method=\"post\">";
		echo '<input type="date" name="fecha_entrada" id="texto" size ="13" placeholder="Fecha entrada" min="2015-01-01" max="2016-01-01" value="'.date("Y-m-d").'">';
			echo '<input type="date" name="fecha_salida" id="texto" size ="13" placeholder="Fecha salida" min="2015-01-01" max="2016-01-01" value="'.date("Y-m-d",strtotime("+1 day")).'">';
			echo '<select name="tipohab" id="desplegable">>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			<input type="submit" id="submit" value="reservar">
		</form>';
		echo "</div> <!-- end busqueda -->";
	?>
<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		include "./php/includes/alojamiento_class.php";

        $dbhandler = new db_handler("localhost","root","heisenburg");
        $dbhandler->connect();
		// echo "tipo hab".$_REQUEST["tipohab"];
	    // echo "tipo hab".$_REQUEST["fecha_entrada"];
	    // echo "tipo hab".$_REQUEST["fecha_salida"];

		$disponibilidad=comprobar_habitaciones_api_rest($_REQUEST["fecha_entrada"],$_REQUEST["fecha_salida"],$_REQUEST["tipohab"],$_GET['id'],$dbhandler);

		if($disponibilidad==-1){//no esta disponible si $disponibilidd =-1
			echo "<div class=\"barra_sesion\"> Lo sentimos, no hay habitaciones diponibles en esas fechas.</div> ";
		}else{//si esta disponible si $disponibilidd !=-1 y la idHAbitacion=$disponibilidd
			$idHabitacion=$disponibilidad;
			$precio=get_precio($idHabitacion,$dbhandler);
			$dni=get_dni($_SESSION['user'],$dbhandler);
			echo "<div class=\"barra_sesion\">Usted ha reservado una habitacion de tipo ".$_REQUEST["tipohab"]." con DNI ".$dni." por ".$precio." €</div>";
			//para reservar necsitmoas:
			//fecha entrada y salida, coste, dni user,idhabitacion
			//coste lo cogemos del idhabitaion
			//dni lo cogemos de user

	        $sql="insert into reserva(fecha_entrada,fecha_salida, precio,dni,idHabitacion) values ('".$_REQUEST["fecha_entrada"]."','".$_REQUEST["fecha_salida"]."','".$precio."','".$dni."','".$idHabitacion."')";
	        if ($dbhandler->query($sql) === TRUE) {
				
	           // echo "<script> alert(\"Reserva realizada\");</script>";

	        } else {
	            echo "Error: ".$dbhandler->error();
	        }
		}
        $dbhandler->close();
    }

?>
