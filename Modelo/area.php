<?php

class area
{
  
  function _construct()
  {

  } 

  function obtenerAreas()
  {
    include("conexion.php");
    $query = "SELECT * FROM area";
    $result  = pg_query($query);
    $areas =  array();
    while ($row = pg_fetch_row($result)) {
      array_push($areas, $row);
    }
    return $areas;
  }

  function agregarArea($nombre)
  {
    include("conexion.php");
    $query = "INSERT INTO area(nombre) VALUES('$nombre')";
    $result = pg_query($query);
  }
  
  function obtenerAreaPorID($id)
  {
    include("conexion.php");
    $query = "SELECT * FROM area where id_area = '".$id."'";
    $result = pg_query($query);
    $row = pg_fetch_row($result); 
    return $row;
  }

  function obtenerIDArea($nombre)
  {
    include("conexion.php");
    $query = "SELECT id_area FROM area where nombre = '".$nombre."'";
    $result = pg_query($query);
    $row = pg_fetch_row($result); 
    return $row;
  }

  function eliminarArea($id)
  {
    include("conexion.php");
    $query = "DELETE FROM area where id_area = '".$id."'";
    $result = pg_query($query);
    $row = pg_num_rows($result);
  }
}

?>