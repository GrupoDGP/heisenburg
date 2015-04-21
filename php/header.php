<header>
    <div class = "titulo">
        <h1> HEISENBURG </h1>
    </div> <!-- end titulo -->

    <div class = "logo">
        <a href="index.php"><img id = "logo" src = "img/logoheisen.png"/></a>
    </div> <!-- end logo -->

    <div class = "sesion">
        <form class = "barra_sesion">
            <input type = "text" id="texto" size ="13" placeholder="Usuario" required>
            <input type="password" id="texto" size ="13" placeholder="Contraseña" required>
            <input type="submit" id="submit" value="Enviar">
        </form>
    </div> <!-- end sesion -->

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
        </form>
    </div> <!-- end busqueda -->
	
	<!-- submenu de categorias de hoteles-->
	<div class = "menu">
		<a href="#"><li>HOTELES</li></a>
		<a href="#"><li>CASAS RURALES</li></a>
		<a href="index.php?page=registro"><li id="boton_registro">¡REGISTRATE!</li></a>	
	</div>
	
</header>
