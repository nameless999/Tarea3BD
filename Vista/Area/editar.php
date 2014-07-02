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
	<h1>Editar Área</h1>
	<?php 
		include("../../Modelo/area.php");
		$ar = new area();
		$area = $ar->obtenerAreaPorID($_GET[id]);
    ?>


	<form action="../../Controlador/area.php" method="post">
		<label for="nombre">Nombre:</label>
			<input value="<?=$area[1]?>" id="nombre" type="text" name="nombreArea" placeholder="Nombre Area" required="true" />
		<label for="email">Número estimado de Coolaboradores:</label>
			<input id="text" type="text" name="email"  required="true" />
		<label for="email">Hora de inicio:</label>
			<input value="<?=$area[2]?>"  id="text" type="text" name="email"  required="true" />
		<label for="email">Hora de fin:</label>
			<input value="<?=$area[3]?>"  id="text" type="text" name="email"  required="true" />	
	
	</form>

  
</body>
</html>


