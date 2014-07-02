<!DOCTYPE html> 

<html lang="es"> 
<head>
	<title>Vertical Menu</title> 
	<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js" /></script>
	<link rel="stylesheet" href="../../bootstrap/css/menu.css"/>


 
<body>
	<h1>Vertical Menu</h1>
<ul>
<?php 
	include("../../Modelo/area.php");
	$ar = new area();
	$areas = $ar->obtenerAreas();
?>

	<?php foreach ($areas as $area):?>
	<li> <?php echo $area[1]; ?> 
	<ul>
		<li><a href="editar.php?id=<?= $area[0]?>"> Editar</a></li>
		<li><a href="../../Controlador/eliminarArea.php?id=<?= $area[0]?>"> Eliminar</a></li>
	</ul>
	</li> 

	 <?php endforeach; ?>

	 <li> <a href="agregar.php">Agregar</a> </li>
</ul>
	
</body>
</html>
