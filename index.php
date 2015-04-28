<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HeisenBurg</title>
<link href="css/styles.css" rel="stylesheet" type = "text/css"/>
<link rel="icon" type="image/png" href="./img/logoheisen.png">
<script type="text/javascript" src="js/scripts.js"></script>

<?php
	if(isset($_GET['page']))
    	$current_page=$_GET['page'];
	else
		$current_page="hoteles";
	/*if(!isset($current_page) || empty($current_page)){
        $current_page="hoteles";
    }*/
?>


</head>
<body>
    <div class = "marco">
        <?php include './php/header.php'; ?>
        <section>
            <?php include './php/'. $current_page . '.php';?>

        </section> <!-- end section (hoteles) -->

		</div> <!-- end marco -->
        <?php include './php/footer.php'; ?>
    </div>	<!-- end background -->
</body>
</html>
