<header>
    <div class = "titulo">
        <h1> HEISENBURG </h1>
    </div> <!-- end titulo -->

    <div class = "logo">
        <a href="index.php"><img id = "logo" src = "img/logoheisen.png"/></a>
    </div> <!-- end logo -->
	<?php
		if(isset($_SESSION['user']) ){

			echo '<a href="index.php?salir"><div id = "boton_salir">CERRAR SESION</div></a>';

		}else{
			include "php/login.php";
		}
	?>



    <div class = "busqueda">
        <form class = "barra_sesion" action="index.php?page=busqueda" method="post">
            <!-- <input type="text" id="texto" size ="18" placeholder="Buscar..." required>-->
            <input type="text" name="precio" id="texto" size ="11" placeholder="Precio">
            <input type="date" name="fecha_entrada" id="texto" size ="13" placeholder="Fecha entrada" min="2015-01-01" max="2016-01-01" value="<?php echo date("Y-m-d");?>">
            <input type="date" name="fecha_salida" id="texto" size ="13" placeholder="Fecha salida" min="2015-01-01" max="2016-01-01" value="<?php echo date("Y-m-d",strtotime("+1 day"));?>">
            <select name="tipohab" id="desplegable">>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            <input type="submit" id="submit" value="Buscar">
            <br>
            <br>
            <div id = "boton_busqueda">
                <label>
                    <input type="checkbox" name="hotel" value="hotel"><span>HOTELES</span>
                </label>
            </div>
            <div id = "boton_busqueda">
                <label>
                	<input type="checkbox" name="casa" value="casa" ><span>CASAS RURALES</span>
        		</label>
            </div>
        </form>
    </div> <!-- end busqueda -->

	<!-- submenu de categorias de hoteles-->
	<div class = "menu">
    	<?php

			if(!isset($_SESSION['user']) ){
				echo '<a href="index.php?page=registro"><li id="boton_registro">¡REGISTRATE!</li></a>';
            }
			if(isset($_SESSION['user']) ){
				$user=$_SESSION['user'];

				$dbhandler = new db_handler("localhost","root","heisenburg");
				$tipo="select tipo from `usuarios` where `usuario`='".$user."' and tipo='Hostelero'";
				$dbhandler->connect();
				$consulta=$dbhandler->query($tipo);

				if( $consulta->num_rows > 0 ){
					echo '<a href="index.php?page=addhabitacion"><li id="boton_registro">¡AGREGAR HABITACION!</li></a>';
					echo '<a href="index.php?page=addhotel"><li id="boton_registro">¡AGREGAR HOTEL!</li></a>';
				}
			}
		?>
	</div>

</header>
