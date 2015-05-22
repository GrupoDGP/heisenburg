<h1> PROCEDIMIENTO DE RESERVA </h1>

<?php echo "<h3>Usted, ".$_SESSION['user']." va a reservar: "; ?>

<?php

	if( $consultado == null )
		$consultado = false;

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
		var_dump( $consultado );
		if( $consultado == false ){
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
		}else{

			echo 'Reserva realizada ^^!';

		}
	?>
<?php


//devuevle true si la habitacion con id esta libre entre fecha llegada y salida
function comprobar_disponibilidad($fecha_entrada,$fecha_salida,$idHabitacion,$dbhandler){
	//compruba si dicha habiatacion esta reservada actualmente
	$disponible= true;
	$query="SELECT * from reserva where idHabitacion=".$idHabitacion." AND ( (fecha_entrada<='".$fecha_entrada."' AND fecha_salida>='".$fecha_entrada."' ) OR (fecha_entrada>='".$fecha_entrada."' AND fecha_salida>='".$fecha_salida."' AND fecha_entrada<='".$fecha_salida."')                                        OR (fecha_entrada<='".$fecha_entrada."' AND fecha_salida<='".$fecha_salida."' AND fecha_salida>='".$fecha_entrada."')                                    )";
	$table=$dbhandler->query($query);
	if ($table->num_rows > 0) {
		$disponible= false;//no esta disponible
	}
	return $disponible;
}
//devuelve la ide de la habitacion que este disponible
//Devuelve -1 si no hay habitaciones
function comprobar_habitaciones($fecha_entrada,$fecha_salida,$tipo_hab,$idAlojamiento,$dbhandler){
	$query="SELECT habitacion.idHabitacion FROM alojamientos, habitacion WHERE habitacion.idAlojamiento=alojamientos.idAlojamiento AND habitacion.tipo_hab=".$tipo_hab." AND alojamientos.idAlojamiento='".$idAlojamiento."'";

	$table=$dbhandler->query($query);
	if ($table->num_rows > 0) {
		// output data of each row
		while($row = $table->fetch_assoc()) {
			if(comprobar_disponibilidad($fecha_entrada,$fecha_salida,$row["idHabitacion"],$dbhandler)){
				return $row["idHabitacion"];//si esta disponible la mostramos
			}
		}
	}
	return -1;
}

//devuelve el precio de la habitacion con id
function get_precio($idHabitacion,$dbhandler){
	$query="SELECT precio FROM habitacion WHERE idHabitacion='".$idHabitacion."'";
	$table=$dbhandler->query($query);
	if ($table->num_rows > 0) {
		$row = $table->fetch_assoc();
		return $row["precio"];//si esta disponible la mostramos
	}
	return 0;
}

//devuelve el dni de un usuario con si nombre usuaro
function get_dni($user,$dbhandler){
	$query="SELECT dni FROM usuarios WHERE usuario='".$user."'";
	$table=$dbhandler->query($query);
	if ($table->num_rows > 0) {
		$row = $table->fetch_assoc();
		return $row["dni"];//si esta disponible la mostramos
	}
	return 0;
}



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $dbhandler = new db_handler("localhost","root","heisenburg");
        $dbhandler->connect();
		// echo "tipo hab".$_REQUEST["tipohab"];
	    // echo "tipo hab".$_REQUEST["fecha_entrada"];
	    // echo "tipo hab".$_REQUEST["fecha_salida"];

		$disponibilidad=comprobar_habitaciones($_REQUEST["fecha_entrada"],$_REQUEST["fecha_salida"],$_REQUEST["tipohab"],$_GET['id'],$dbhandler);

		if($disponibilidad==-1){//no esta disponible si $disponibilidd =-1
			echo " <script> alert('habitaciones no diponibles') </script> ";
		}else{//si esta disponible si $disponibilidd !=-1 y la idHAbitacion=$disponibilidd
			$idHabitacion=$disponibilidad;
			$precio=get_precio($idHabitacion,$dbhandler);
			$dni=get_dni($_SESSION['user'],$dbhandler);
			$consultado = true;
			var_dump( $consultado );
			echo " Usted ha reservado una habitacion de tipo ".$_REQUEST["tipohab"]." con DNI ".$dni." por ".$precio." €";
			//para reservar necsitmoas:
			//fecha entrada y salida, coste, dni user,idhabitacion
			//coste lo cogemos del idhabitaion
			//dni lo cogemos de user

	        $sql="insert into reserva(fecha_entrada,fecha_salida, precio,dni,idHabitacion) values ('".$_REQUEST["fecha_entrada"]."','".$_REQUEST["fecha_salida"]."','".$precio."','".$dni."','".$idHabitacion."')";
	        if ($dbhandler->query($sql) === TRUE) {
	            echo "<script> alert(\"Reserva realizada\");</script>";

	        } else {
	            echo "Error: ".$dbhandler->error();
	        }
		}
        $dbhandler->close();
    }

?>
