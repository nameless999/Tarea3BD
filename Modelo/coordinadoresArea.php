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

  function agregaCoordiandorArea($rol,$id_area)
  {
    include("conexion.php");
    $query = "INSERT INTO coordinador_area(rol,id_area) VALUES('$rol','$id_area')";
    $result = pg_query($query);
  }
}