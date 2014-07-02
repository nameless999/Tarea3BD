<?php

	include("../Modelo/area.php");
	$ar = new area();
	$ar->eliminarArea($_GET[id]);
	header("Location: ../Vista/Area/area.php");

?>