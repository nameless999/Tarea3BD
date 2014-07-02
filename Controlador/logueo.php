
<?php
	include("../Modelo/alumno.php");
	$al = new alumno();
	$alumnos = $al->obtenerAlumnos();
	foreach ($alumnos as $alumno) {
    	if ($alumno[4] == $_POST[correo]  && $alumno[5] == $_POST[contraseña] ){
    		header("Location: ../Vista/panel.php");
    	}
	}

?>


<p>

<?php
	
	echo $_POST[nombre];
	echo $_POST[contraseña];
	
?>

	adssdadas
</p>
