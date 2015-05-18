<div class = "sesion">
	<form class = "barra_sesion" action="index.php" method="post" >
        <input name = 'user' type = "text" id="texto" size ="13" placeholder="Usuario" required>
        <input name = 'pass' type="password" id="texto" size ="13" placeholder="Contraseña" required>
        <input name ='enviar' type="submit" id="submit" value="Enviar">
    </form>
</div> <!-- end sesion -->

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST['user']) && isset($_REQUEST['pass'])) {

			$user=$_REQUEST['user'];
			$pass=$_REQUEST['pass'];
			$dbhandler = new db_handler("localhost","root","heisenburg");
			$sql="select password from `usuarios` where	`usuario`='".$user."' and password='".$pass."'";
			$dbhandler->connect();
			$consulta=$dbhandler->query($sql);

			if($consulta->num_rows > 0 )
			{
				echo " <script> alert('Usuario logeado') </script> ";
				$_SESSION['user']=$user;
				header("location:index.php");
			}
			else{
				echo " <script> alert('Usuario y contraseña incorrectos!') </script> ";
			}
			$dbhandler->close();
	}

?>
