<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="../bootstrap/normalize.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</head>

<body class="container">

      <div class="center-block">
        <h1>Ingresa al sistema</h1>
        <form method="post" action="../Controlador/logueo.php" role="form" class="form-inline">

          <div class="form-group">

            <input name="correo" type="text" class="form-control" placeholder="Introduce tu mail">
          </div>
          <br>
          <div class="form-group">

            <br>
            <input name="contraseña" type="password" class="form-control" 
                   placeholder="Contraseña">
          </div>
          <br>
          <br>
         <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

      </div>

</body>
</html>