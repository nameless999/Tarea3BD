<?php

class carrera
{
  
  function _construct()
  {

  } 

  function obtenerCarreras()
  {
    include("conexion.php");
    $query = "SELECT * FROM carrera";
    $result  = pg_query($query);
    $carreras =  array();
    while ($row = pg_fetch_row($result)) {
      array_push($carreras, $row);
    }
    return $carreras;
  }

}

?>
