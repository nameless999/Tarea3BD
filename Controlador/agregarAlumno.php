<?php

  	include("conexion.php");
	include("../Modelo/alumno.php");
	include("../Modelo/area.php");
	include("../Modelo/coordinadoresArea.php"); 
	
	$al = new alumno();
	echo "string1";
	$alumnos = $al->obtenerAlumnos();
	foreach ($alumnos as $alumno)
	{
		if($_POST[rol] != $alumno[0] )
		{
			$al->agregarAlumno($_POST[nombre],$_POST[rol],$_POST[rut],$_POST[telefono],$_POST[talla],$_POST[carrera],$_POST[correo],$_POST[contraseña]);
		}

	} 
	$cor = new coordinadoresArea();
	$cor->agregarCoordinadorArea($_POST[rol],$_POST[area]);
 
?>