<div class = "sesion">
	<form class = "barra_sesion" action="#" method=POST enctype=multipart/form-data>
        <input name = 'user' type = "text" id="texto" size ="13" placeholder="Usuario" required>
        <input name = 'pass' type="password" id="texto" size ="13" placeholder="Contraseña" required>
        <input name ='enviar' type="submit" id="submit" value="Enviar">
    </form>
</div> <!-- end sesion -->

<?php
	
	
    $dbhandler = new db_handler("localhost","root","heisenburg");
	
	if(isset($_POST['enviar']))
	{
		$user=$_POST['user'];
		$pass=$_POST['pass'];
	 
		if(!empty($_POST['user']) && !empty($_POST['pass']))
		{	
			
			/*$consulta=mysql_query("select password from `usuarios` where
									`usuario`='".$user."' and password='".$pass."'");*/
			
			$consulta=$dbhandler->query("SELECT * FROM usuarios");
			/*
			if(mysql_num_rows($consulta) != 0 )
			{	
				echo " <script> alert('Usuario logeado') </script> ";
				$_SESSION['user']=$user;
				header("location:index.php");
			}
			else
				
				echo " <script> alert('Usuario y contraseña incorrectos!') </script> ";
				*/
			}
			
	
	}
	
?>