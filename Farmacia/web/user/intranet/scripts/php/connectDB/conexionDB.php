<?php
/*
 * Program:	ConexionDB.php
 * Desc:	This script connect with database using file Vars.inc
 *		and test conection and show mistakes.
 */
include("Vars.inc");

//Conectamos con MySQL
$conexion = mysqli_connect($host,$user,$password,$database)
or die ("Fallo en el establecimiento de la conexión");

if(!$conexion){
  echo "Error!! No se puede conectar".mysql_error();
  exit;
}

?>
