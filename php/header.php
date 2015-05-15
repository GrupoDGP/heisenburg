<header>
    <div class = "titulo">
        <h1> HEISENBURG </h1>
    </div> <!-- end titulo -->

    <div class = "logo">
        <a href="index.php"><img id = "logo" src = "img/logoheisen.png"/></a>
    </div> <!-- end logo -->
	<?php
		if(isset($_SESSION['user']) ){
			
			echo '<a href="index.php?salir"><div class ="sesion" >Salir</div></a>';

		}else{
			include "php/login.php";
		}
	?>
    <div class = "busqueda">
        <form class = "barra_sesion">
            <input type="text" id="texto" size ="18" placeholder="Buscar..." required>
            <input type="text" id="texto" size ="11" placeholder="Precio">
            <input type="date" id="texto" size ="13" placeholder="Fecha">
            <select name="tipo" id="desplegable">
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
                    <input type="checkbox" value="hotelcheck"><span>HOTELES</span>
                </label>
            </div>
            <div id = "boton_busqueda">
                <label>
                	<input type="checkbox" value="hotelcheck"><span>CASAS RURALES</span>
        		</label>
            </div>
        </form>
    </div> <!-- end busqueda -->

	<!-- submenu de categorias de hoteles-->
	<div class = "menu">
		<a href="index.php?page=registro"><li id="boton_registro">¡REGISTRATE!</li></a>
        <a href="index.php?page=addhotel"><li id="boton_registro">¡AGREGAR HOTEL!</li></a>
	</div>

</header>
