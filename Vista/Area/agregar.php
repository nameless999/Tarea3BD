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
	<h1>Agregar Área</h1>
	
	<form action="../../Controlador/agregarArea.php" method="post">
	<label for="nombre">Nombre:</label>
	 <input id="nombre" type="text" name="nombreArea" placeholder="Nombre Area" required="true" />
	 <label for="email">Número estimado de Coolaboradores:</label>
	 <input id="email" type="text" name="email"  required="true" />
	 <input id="submit" type="submit" name="submit" value="Enviar" />
	</form>

  
</body>
</html>


