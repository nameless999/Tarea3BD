<?php

	include("../Modelo/area.php");
	$ar = new area();
	$ar->agregarArea($_POST[nombreArea]);
	header("Location: ../Vista/Area/area.php");
?>