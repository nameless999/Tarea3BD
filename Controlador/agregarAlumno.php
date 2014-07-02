<?php

	include("../Modelo/alumno.php");
	include("../Modelo/area.php");
	$al = new alumno();
	$al->agregarAlumno($_POST[nombre],$_POST[rol],$_POST[rut],$_POST[telefono],$_POST[talla],$_POST[carrera],$_POST[correo],$_POST[contraseña]);

	/*$ar = new area();
	$area = $ar->obtenerIDArea($_POST[area]);
	$ar->agregaCoordinadorArea($_POST[rol],$area);
	header("Location: ../Vista/Coordinadores Area/coordinadoresArea.php"); */
?>