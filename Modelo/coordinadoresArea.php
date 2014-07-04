<?php

class coordinadoresArea
{
  
  function _construct()
  {

  } 

  function obtenerCoordinadoresArea()
  {
    include("conexion.php");
    $query = "SELECT * FROM coordinador_area";
    $result  = pg_query($query);
    $coordinadores_area =  array();
    while ($row = pg_fetch_row($result)) {
      array_push($coordinadores_area, $row);
    }
    return $coordinadores_area;
  }

  function agregarCoordinadorArea($rol,$id_area)
  {
    include("conexion.php");
    echo "Rol:",$rol," ","Id Area:",$id_area;
    $query = "INSERT INTO coordinador_area VALUES('".$rol."','".$id_area."')";
    $result = pg_query($query);

    pg_free_result($result);

    // Closing connection
    pg_close($db);
  }
}