<?php
//error_reporting(0);
 require 'conexion.php';
 

   $Color = $_POST['Color'];  
   $Nombre = $_POST['Nombre'];
	$Grado_De_Complejidad = $_POST['Grado_De_Complejidad'];
  
   
	$sql = "INSERT INTO planta ( Color, Nombre, Grado_De_Complejidad)
    VALUES ( '$Color', '$Nombre', $Grado_De_Complejidad)";
   
   $resultado = $mysqli->query($sql);
   
?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
    <body>
   <div class="container">
        <div class="row">
           <div class="row" style="text-align:center">
               <?php if($resultado) { ?>
               <h3>REGISTRO GUARDADO</h3>
               <?php  } else {?>
               <h3>ERROR AL GUARDAR</h3>
               <?php }?>


            <a href="index.php" class="btn btn-primary">Regresar</a>
               
            </div>
      </div>
   </div>
  
    </body>
    </html>
    