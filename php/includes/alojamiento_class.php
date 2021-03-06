<?php
//Clase Alojamiento
class Alojamiento{
    public $idAlojamiento;
    public $nombre;
    public $tipo; //string hotel o casa rural
    public $precio;
    public $direccion;
    public $estrellas; //0-5
    public $telefono;
    public $email;
    public $video;
    public $resumen;
    public $resumenCorto;
    public $imagen1;
    public $imagen2;
    public $imagen3;
    public $imagen4;

    //se le pasa una "row" del query
    public function read_hotel($row){
        $this->idAlojamiento=$row["idAlojamiento"];
        $this->nombre=$row["nombre"];
        $this->tipo=$row["tipo"];
        $this->precio=$row["precio"];
        $this->direccion=$row["direccion"];
        $this->estrellas=$row["estrellas"]; //0-5
        $this->telefono=$row["telefono"];
        $this->email=$row["email"];
        $this->video=$row["video"];
        $this->resumen=$row["resumen"];
        $this->resumenCorto=$row["resumenCorto"];
        $this->imagen1=$row["imagen1"];
        $this->imagen2=$row["imagen2"];
        $this->imagen3=$row["imagen3"];
        $this->imagen4=$row["imagen4"];
    }


    public function mostrarInformacionReducida(){
        echo "<a class=\"enlace\" href=\"./index.php?page=".$this->idAlojamiento."\"  >";
        echo "<h2 id=\"nombre_hotel\"> ".$this->tipo." ".$this->nombre." <br>";
        echo "Precio: ".$this->precio." €";
        echo "</h2><br>";
        echo "<div id =\"foto_hotel\">";
        echo "<img id=\"foto_hotel\" src = \"".$this->imagen1."\">";
        echo "</div>";
        echo "<div>";
        echo "<p>".$this->resumenCorto."</p>";
        echo "</div>";
        echo "</a>";
    }

    private function mostrarImagenesRotando(){
        echo "<div class =\"foto_hotel2\">";
        echo "<div id=\"slider\">";
        echo "<div id=\"slidesContainer\">";
            echo "<div class=\"slide\"><img onload=\"rotar()\" src= \"". $this->imagen1 . "\" width=\"230px\" height=\"200px\" alt=\"Imagen hotel\" title=\"Imagen hotel\"></div> ";
            echo "<div class=\"slide\"><img src= \"". $this->imagen2 . "\" width=\"230px\" height=\"200px\" alt=\"Imagen hotel\" title=\"Imagen hotel\"></div> ";
            echo "<div class=\"slide\"><img src= \"". $this->imagen3 . "\" width=\"230px\" height=\"200px\" alt=\"Imagen hotel\" title=\"Imagen hotel\"></div> ";
            echo "<div class=\"slide\"><img src= \"". $this->imagen4 . "\" width=\"230px\" height=\"200px\" alt=\"Imagen hotel\" title=\"Imagen hotel\"></div> ";
			echo "<div class=\"slide\"><img src= \"". $this->imagen1 . "\" width=\"230px\" height=\"200px\" alt=\"Imagen hotel\" title=\"Imagen hotel\"></div> ";

        echo "</div> <!-- /slidesContainer-->";
        echo "</div> <!-- /slider -->";
        echo "</div> <!-- end foto_hotel -->";

    }

    private function mostrarMapa(){
        echo "<div id=\"TEST\" onclick=\"closepopup('MAPpopUp')\" style=\"display:none\"></div>";
        echo $this->direccion."<a href=\"#\" onClick=\"popup('MAPpopUp',600,450)\">  Ver mapa</a>";
        echo "	<div id=\"MAPpopUp\" onclick=\"closepopup('MAPpopUp')\" style=\"display:block\">";

        echo " <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3179.40744621977!2d-3.6062300127280436!3d37.166786949641846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd71fc9a732e75a1%3A0x167092f65369d5ab!2sHotel+MA+Nazaries+Business+%26+Spa!5e0!3m2!1ses!2ses!4v1429019598711\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\"></iframe>";
        echo "</div>";
    }

    private function mostrarValoracion($dbhandler){
        $valoracion=0;//creamso variable valoracion

        $res=$dbhandler->query("SELECT valor FROM `valoracion` WHERE `idAlojamiento`=".$this->idAlojamiento);
        if ($res->num_rows > 0){
            while($row=$res->fetch_assoc()){
                $valoracion+=$row["valor"];
            }
            $valoracion/=$res->num_rows;
        }
        $valoracion=round($valoracion, 1);    //redonde con un solo decimal
        echo "<p class=\"precio\"> Valoracion ".  $valoracion."  </p>";

    }


    private function valorar(){
        echo "<div class =\"valorar\">";
            //boton para ir atras
            echo "<a href=\"./index.php\"><div class =\"boton_atras\">ATRAS </div></a>";

            echo "<h3> Valorar</h3>";
            echo "<ul class=\"listaValores\">";
                echo "<li>";
                    echo "<img  onclick=\"valorar(10,".$this->idAlojamiento.")\"  src=\"img/valorar/muybien.png\" height=\"25px\" width=\"25px\" alt=\"valoracionMuyBuena\" title=\"valoracionMuyBuena\" >";
                    echo "</li>";
                echo "<li>";
                    echo "<img onclick=\"valorar(7,".$this->idAlojamiento.")\"  src=\"img/valorar/bien.png\" height=\"25px\" width=\"25px\" alt=\"valoracionBuena\" title=\"valoracionBuena\">";
                echo "</li>";
                echo "<li>";
                    echo "<img onclick=\"valorar(4,".$this->idAlojamiento.")\"  src=\"img/valorar/regular.png\" height=\"25px\" width=\"25px\" alt=\"valoracionRegular\" title=\"valoracionRegular\">";
                echo "</li>";
                echo "<li>";
                    echo "<img onclick=\"valorar(1,".$this->idAlojamiento.")\"  src=\"img/valorar/mal.png\" height=\"25px\" width=\"25px\" alt=\"valoracionMala\" title=\"valoracionMala\">";
                echo "</li>";
            echo "</ul>";

        echo "</div> <!-- end valorar -->";
    }

    private function mostrarServicios(){

        echo "<div class =\"servicios\">";
            echo "<h5 > Servicios</h5>";

                echo " <ul class=\"iconos-servicios \">";
                    echo "<li><img src=\"http://cdrst.com/adjuntos/filtros/parking.png\" height=\"30px\" width=\"30px\" alt=\"Parking\" title=\"Parking\">";
                        echo "    <img src=\"http://cdrst.com/adjuntos/filtros/wifi.png\" height=\"30px\" width=\"30px\" alt=\"Wifi\" title=\"Wifi\"></li>";
                    echo "<li><img src=\"http://cdrst.com/adjuntos/filtros/mascotas.png\" height=\"30px\" width=\"30px\" alt=\"Se admiten mascotas\" title=\"Se admiten mascotas\">";
                        echo "    <img src=\"http://cdrst.com/adjuntos/filtros/piscina-cubierta.png\" height=\"30px\" width=\"30px\" alt=\"Piscina climatizada o cubierta\" title=\"Piscina climatizada o cubierta\"></li>";
                    echo "<li><img src=\"http://cdrst.com/adjuntos/filtros/tv.png\" height=\"30px\" width=\"30px\" alt=\"Televisión\" title=\"Televisión\">";
                        echo "    <img src=\"http://cdrst.com/adjuntos/filtros/aire-acondicionado.png\" height=\"30px\" width=\"30px\" alt=\"Aire acondicionado\" title=\"Aire acondicionado\"></li>";
                    echo "<li><img src=\"http://cdrst.com/adjuntos/filtros/internet.png\" height=\"30px\" width=\"30px\" alt=\"Internet\" title=\"Internet\">";
                        echo "    <img src=\"http://cdrst.com/adjuntos/filtros/restaurante.png\" height=\"30px\" width=\"30px\" alt=\"Restaurante\" title=\"Restaurante\"></li>";
                    echo "<li><img src=\"http://cdrst.com/adjuntos/filtros/habitaciones-no-fumadores.png\" height=\"30px\" width=\"30px\" alt=\"Habitaciones libres de humos\" title=\"Habitaciones libres de humos\">";
                        echo "    <img src=\"http://cdrst.com/adjuntos/filtros/accesibilidad-discapacitados.png\" height=\"30px\" width=\"30px\" alt=\"Habitaciones adaptadas\" title=\"Habitaciones adaptadas\"></li>";
                echo "</ul>";

        echo "</div> <!-- end servicios-->";
    }
    private function mostrarNombre(){
       if($this->tipo=="hotel"){
           echo "HOTEL ".$this->nombre."  ";
        }
        else{//$this->tipo=="casa"
            echo "CASA ".$this->nombre."  ";
        }

    }


    public function mostrarInformacionAmpliada($dbhandler){

        echo "<div class =\"info_especifica_grupo\">";
            $this->mostrarImagenesRotando();
            echo " <div class =\"info_especifica\">";
				// Boton de reservar
				if( isset( $_SESSION['user']))
					echo '<a href= "index.php?page=reservar&id='.$this->idAlojamiento.'"><div id = "registrate">RESERVAR</div></a>';
				// Fin boton reservar
                echo "<h1 >";
                	$this->mostrarNombre();
                	for ($i = 0; $i < $this->estrellas ; $i++)
                		echo "<img src=\"img/star.png\" height=\"20px\" alt=\"estrella\">";
                    echo "</h1>";

                echo "<p class=\"precio\"> Precio por noche desde ".$this->precio."€ </p>";
				echo "<p> Telefono: ".$this->telefono."</p>";

                $this->mostrarMapa();
                $this->mostrarValoracion($dbhandler);
            echo "</div> <!-- end info_espeficia -->";
            $this->valorar();
        echo "</div> <!-- end info_espeficia_grupo -->";

        echo "<div class =\"info_general\">";
        echo "<div class =\"resumen\">";
          echo "<h4 >Hotel ". $this->nombre . "</h4>";
          echo "<p>" . $this->resumen . "<br>";
        echo "</div> <!-- end resumen-->";
        $this->mostrarServicios();
        echo "</div> <!-- end info_generañ -->";

		echo "<div class =\"videos\">";
			echo "<br>VIDEO INFORMATIVO<BR><br><br>";
			echo "<iframe width=\"420\" height=\"315\"
				src=\"" . $this->video . "\" frameborder=\"0\" allowfullscreen>";
			echo "</iframe>";
		echo "</div> <!-- end video-->";
    }

}


//devuelve todas los alojameintos en un array dada una query
function leer_alojamientos($query,$dbhandler){
    $table=$dbhandler->query($query);
    $result=array();
    if ($table->num_rows > 0) {
        // output data of each row
        while($row = $table->fetch_assoc()) {
            $alojamiento=new Alojamiento;
            $alojamiento->read_hotel($row);
            $result[]=$alojamiento;
        }
    } else {
        echo "no results";
    }
    return $result;
}

//devuelve unicamente el hotel de id dado
function leer_alojamiento($id,$dbhandler){
    $res=$dbhandler->query("SELECT * FROM `alojamientos` WHERE `idAlojamiento`=".$id);
    if ($res->num_rows > 0){
        $row=$res->fetch_assoc();
        $alojamiento=new Alojamiento;
        $alojamiento->read_hotel($row);
        return $alojamiento;
    }else {
        echo "no results";
        return FALSE;
    }
}
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
//devuelve todas los alojameintos en un array respecto un tipo de habitacion y un precio
function buscar_alojamientos($precio,$tipo_hab,$tipo_Alojamiento,$dbhandler,$fecha_entrada,$fecha_salida){
    $query="SELECT alojamientos.*, habitacion.idHabitacion FROM alojamientos, habitacion WHERE habitacion.idAlojamiento=alojamientos.idAlojamiento AND habitacion.tipo_hab=".$tipo_hab." AND alojamientos.tipo='".$tipo_Alojamiento."' AND alojamientos.precio<=".$precio;

    $table=$dbhandler->query($query);
    $result=array();
    if ($table->num_rows > 0) {
        // output data of each row
        while($row = $table->fetch_assoc()) {
            $alojamiento=new Alojamiento;
            $alojamiento->read_hotel($row);
            //echo "idhabitacion ".$row["idHabitacion"];
            //echo "fecha_entrada ".$fecha_entrada;
            //echo "fecha_salida ".$fecha_salida;
            if(comprobar_disponibilidad($fecha_entrada,$fecha_salida,$row["idHabitacion"],$dbhandler)){
                $result[]=$alojamiento;//si esta disponible la mostramos
            }
        }
    } else {
        echo "no results";
    }
    return $result;
}


//funcion que devuvel un array de alojamiento para la api rest
function buscar_alojamientos_api_rest($tipo,$fecha_inicio,$fecha_fin){
     require "../php/includes/dbhandler.php";
    $dbhandler = new db_handler("localhost","root","heisenburg");
    $dbhandler->connect();
    $hoteles=buscar_alojamientos(500,$tipo,"hotel",$dbhandler,$fecha_inicio,$fecha_fin);

    $dbhandler->close();
    return $hoteles;

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


//devuevle true si la habitacion con id esta libre entre fecha llegada y salida
function comprobar_disponibilidad_api_rest($fecha_entrada,$fecha_salida,$idHabitacion,$dbhandler){
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
function comprobar_habitaciones_api_rest($fecha_entrada,$fecha_salida,$tipo_hab,$idAlojamiento,$dbhandler){
	$query="SELECT habitacion.idHabitacion FROM alojamientos, habitacion WHERE habitacion.idAlojamiento=alojamientos.idAlojamiento AND habitacion.tipo_hab=".$tipo_hab." AND alojamientos.idAlojamiento='".$idAlojamiento."'";

	$table=$dbhandler->query($query);
	if ($table->num_rows > 0) {
		// output data of each row
		while($row = $table->fetch_assoc()) {
			if(comprobar_disponibilidad_api_rest($fecha_entrada,$fecha_salida,$row["idHabitacion"],$dbhandler)){
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


//funcion que realiza la reserva a partir de la api rest
function reserva_api_rest($tipo,$fecha_inicio,$fecha_fin,$user,$hotel){
    require "../php/includes/dbhandler.php";
    $dbhandler = new db_handler("localhost","root","heisenburg");
    $dbhandler->connect();
    $dni=get_dni($user,$dbhandler);
    if($dni!=0){

        $disponibilidad=comprobar_habitaciones_api_rest($fecha_inicio,$fecha_fin,$tipo,$hotel,$dbhandler);

		if($disponibilidad==-1){//no esta disponible si $disponibilidd =-1
            return false;
		}else{//si esta disponible si $disponibilidd !=-1 y la idHAbitacion=$disponibilidd
			$idHabitacion=$disponibilidad;
			$precio=get_precio($idHabitacion,$dbhandler);
			$dni=get_dni($user,$dbhandler);
			$consultado = true;
			$sql="insert into reserva(fecha_entrada,fecha_salida, precio,dni,idHabitacion) values ('".$fecha_inicio."','".$fecha_fin."','".$precio."','".$dni."','".$idHabitacion."')";
	        if ($dbhandler->query($sql) === false) {
                return false;
	        }
    }
    }else{
        return false;
    }
    $dbhandler->close();
    return true;

}



?>
