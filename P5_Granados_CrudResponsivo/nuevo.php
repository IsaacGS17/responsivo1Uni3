<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
    <body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">Ingrese la informacion de la nueva Planta</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="Color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
						<input type="nombre" class="form-control" id="Color" name="Color" placeholder="Color" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="Nombre" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Grado_De_Complejidad" class="col-sm-2 control-label">Grado de complejidad</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="Grado_De_Complejidad" name="Grado_De_Complejidad" value="1" checked> 6
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="Grado_De_Complejidad" name="Grado_De_Complejidad" value="0"> 0
						</label>


					</div>
				</div>
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
