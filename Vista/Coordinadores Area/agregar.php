<!DOCTYPE html> 
<html> 
<head>
	<title>Vertical Menu</title> 
	<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8"/>
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js" /></script>
	<link rel="stylesheet" href="../../bootstrap/css/menu.css"/>
	<link rel="stylesheet" href="../../bootstrap/css/formulario.css"/>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!--[if IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome-ie7.min.css" rel="stylesheet" />
	<![endif]-->

  </head>

<body>

<?php include("../../Modelo/carrera.php"); 
      $car = new carrera();
      $carreras = $car->obtenerCarreras();
?>

	<h1>Agregar Coordinador de Área</h1>
	
	<form action="../../Controlador/agregarAlumno.php" method="post">
		<label for="nombre">Nombre:</label>
			<input id="nombre" type="text" name="nombre" placeholder="Nombre Coordinador" required="true" />
		<label for="email">Rol:</label>
			<input id="email" type="text" name="rol" placeholder="Rol USM" required="true" />
		<label for="nombre">Rut:</label>
			<input id="nombre" type="text" name="rut" placeholder="Rut" required="true" />
		<label for="email">Área:</label>
			<input id="email" type="text" name="area" placeholder="Área" required="true" />
		<label for="nombre">Teléfono:</label>
			<input id="nombre" type="text" name="telefono" placeholder="Ej: +56988182965" required="true" />
		<label for="email">Talla Polera:</label>
			<input id="email" type="text" name="talla" placeholder="Ej: S, M, L" required="" />
		<label for="nombre">Carrera:</label>
		<select name="carrera">
		<option value="">Elige una carrera</option>
		<?php 

		    foreach($carreras as $carrera) 
		    { 
		       echo '<option value="'. $carrera[0] .'">'. $carrera[2] .'</option>';
		    }
		?>
		</select>

		<label for="email">Correo Electrónico</label>
			<input id="email" type="mail" name="correo" placeholder="Ejemplo@ejemplo.com" required="true" />
		<label for="email">Contraseña</label>
			<input id="email" type="text" name="contraseña" required="true" />
		
			
		<input id="submit" type="submit" name="submit" value="Enviar" />
	</form>

</body>
</html>
