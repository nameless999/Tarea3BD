
<?php



class alumno
{
  
  function _construct()
  {

  } 

  function obtenerAlumnos()
  {
    include("conexion.php");
    $query = "SELECT * FROM alumno";
    $result  = pg_query($query);
    $alumnos =  array();
    while ($row = pg_fetch_row($result)) {
      array_push($alumnos, $row);
    }

    
    pg_free_result($result);

    // Closing connection
    pg_close($db);

    return $alumnos;
  }

  function agregarAlumno($nombre,$rol,$rut,$telefono,$talla,$id_carrera,$correo,$contraseña)
  {
    include("conexion.php");
    $query = "INSERT INTO alumno VALUES('".$rol."','".$id_carrera."','".$nombre."','".$rut."','".$correo."','".$contraseña."','".$telefono."','".$talla."')";
    return $result = pg_query($query);

    pg_free_result($result);

    // Closing connection
    pg_close($db);
  }
  

  function obtenerAlumnoPorRol($rol){
    include("conexion.php");
    $query = "select * from alumno where rol = '".$rol."'";
    $result  = pg_query($query);
    $row = pg_fetch_row($result); 

    pg_free_result($result);

    // Closing connection
    pg_close($db);
    return $row;
  }

}

?>


