<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HeisenBurg</title>
<link href="css/styles.css" rel="stylesheet" type = "text/css"/>
<link rel="icon" type="image/png" href="./img/logoheisen.png">
<script type="text/javascript" src="js/scripts.js"></script>

<?php
	require "php/includes/dbhandler.php";
	//error_reporting(E_ALL ^ E_DEPRECATED);
	session_start();
	
	if(isset($_GET['salir'])){
		session_destroy();
		header("location:index.php");
	}
	
	if(isset($_GET['page'])){
		if(is_numeric ( $_GET['page'] )){//si es un numero que coja la pagina infoAlojamientos
    		$current_page="infoAlojamientos";
		}
		else{

			$current_page=$_GET['page'];
		}
	}
	else{
		$current_page="alojamientos";
	}
?>


</head>
<body>
    <div class = "marco">
        <?php include './php/header.php'; ?>
        <section>
            <?php include './php/'. $current_page . '.php';?>

        </section> <!-- end section (hoteles) -->

		</div> <!-- end marco -->
        <?php include './php/footer.php';
?>
    </div>	<!-- end background -->
</body>
</html>
