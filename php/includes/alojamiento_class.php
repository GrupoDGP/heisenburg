<?php
//Clase Alojamiento

class Alojamiento{
    private $idAlojamiento;
    private $nombre;
    private $tipo; //string hotel o casa rural
    private $precio;
    private $direccion;
    private $estrellas; //0-5
    private $telefono;
    private $email;
    private $video;
    private $resumen;
    private $resumenCorto;
    private $imagen1;
    private $imagen2;
    private $imagen3;
    private $imagen4;

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

    public function mostrarInformacionAmpliada(){

            echo "<div class =\"info_especifica_grupo\">";

            echo "<div class =\"foto_hotel2\">";
            echo "<div id=\"slider\">";
            echo "<div id=\"slidesContainer\">";
                echo "<div class=\"slide\"><img onload=\"rotar()\" src= \"". $this->imagen1 . "\" width=\"230px\" height=\"200px\" alt=\"Imagen hotel\" title=\"Imagen hotel\"></div> ";
                echo "<div class=\"slide\"><img onload=\"rotar()\" src= \"". $this->imagen2 . "\" width=\"230px\" height=\"200px\" alt=\"Imagen hotel\" title=\"Imagen hotel\"></div> ";
                echo "<div class=\"slide\"><img onload=\"rotar()\" src= \"". $this->imagen3 . "\" width=\"230px\" height=\"200px\" alt=\"Imagen hotel\" title=\"Imagen hotel\"></div> ";
                echo "<div class=\"slide\"><img onload=\"rotar()\" src= \"". $this->imagen4 . "\" width=\"230px\" height=\"200px\" alt=\"Imagen hotel\" title=\"Imagen hotel\"></div> ";

            echo "</div> <!-- /slidesContainer-->";
            echo "</div> <!-- /slider -->";
            echo "</div> <!-- end foto_hotel -->";


            echo " <div class =\"info_especifica\">";
            echo "<h1 >";
            	 echo "HOTEL ".$this->nombre."</br>";
            	for ($i = 0; $i < $this->estrellas ; $i++)
            		echo "<img src=\"img/star.png\" height=\"20px\" alt=\"estrella\">";


                echo "</h1>";
            echo "<p class=\"precio\"> Precio por noche desde ".$this->precio."€ </p>";
            echo "<p>".$this->direccion;


            echo "<div id=\"TEST\" onclick=\"closepopup('MAPpopUp')\" style=\"display:none\"></div>";
            echo "	<a href=\"#\" onClick=\"popup('MAPpopUp',600,450)\">Ver mapa</a>";
            echo "	<div id=\"MAPpopUp\" onclick=\"closepopup('MAPpopUp')\" style=\"display:block\">";

            echo " <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3179.40744621977!2d-3.6062300127280436!3d37.166786949641846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd71fc9a732e75a1%3A0x167092f65369d5ab!2sHotel+MA+Nazaries+Business+%26+Spa!5e0!3m2!1ses!2ses!4v1429019598711\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\"></iframe>";
            echo "</div>";
            echo "</p>";

            $valoracion=8;//ahi que leer de la tabla aaloracion
        echo "<p class=\"precio\"> Valoracion".  $valoracion."  </p>";
        echo "</div> <!-- end info_espeficia -->";


        echo "<div class =\"valorar\">";

        echo "<a href=\"./index.php\"><div class =\"boton_atras\">ATRAS </div></a>";

        echo "<h3> Valorar</h3>";
            echo "<ul class=\"listaValores\">";
                echo "<li>";
                    echo "<a href=\"#\"><img id=\"valoracion1\" src=\"img/valorar/muybien.png\" height=\"25px\" width=\"25px\" alt=\"valoracionMuyBuena\" title=\"valoracionMuyBuena\"></a>";
                    echo "</li>";
                echo "<li>";
                    echo "<a href=\"#\"><img id=\"valoracion2\" src=\"img/valorar/bien.png\" height=\"25px\" width=\"25px\" alt=\"valoracionBuena\" title=\"valoracionBuena\"></a>";
                echo "</li>";
                echo "<li>";
                    echo "<a href=\"#\"><img id=\"valoracion3\" src=\"img/valorar/regular.png\" height=\"25px\" width=\"25px\" alt=\"valoracionRegular\" title=\"valoracionRegular\"></a>";
                echo "</li>";
                echo "<li>";
                    echo "<a href=\"#\"><img id=\"valoracion4\" src=\"img/valorar/mal.png\" height=\"25px\" width=\"25px\" alt=\"valoracionMala\" title=\"valoracionMala\"></a>";
                echo "</li>";
            echo "</ul>";

        echo "</div> <!-- end valorar -->";
        echo "</div> <!-- end info_espeficia_grupo -->";




        echo "<div class =\"info_general\">";
        echo "<div class =\"resumen\">";
          echo "<h4 >Hotel ". $this->nombre . "</h4>";
          echo "<p>" . $this->resumen . "<br>";
        echo "</div> <!-- end resumen-->";

        echo "<div class =\"servicios\">";
            echo "<h5 > Servios</h5>";

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
        echo "</div> <!-- end info_generañ -->";


    }

}
//devuelve todas los alojameintos en un array dada una query
function leer_alojamientos($query,$dbhandler){
    $dbhandler->connect();
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
    $dbhandler->close();
    return $result;
}

//devuelve unicamente el hotel de id dado
function leer_alojamiento($id,$dbhandler){
    $dbhandler->connect();
    $res=$dbhandler->query("SELECT * FROM `alojamientos` WHERE `idAlojamiento`=".$id);
    if ($res->num_rows > 0){
        $row=$res->fetch_assoc();
        $alojamiento=new Alojamiento;
        $alojamiento->read_hotel($row);
        $dbhandler->close();
        return $alojamiento;
    }else {
        echo "no results";
        $dbhandler->close();
        return FALSE;
    }
}
?>
