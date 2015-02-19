<?php
/*
 * Program:	ConexionDB.php
 * Desc:	This script connect with database using file Vars.inc
 *		and test conection and show mistakes.
 */
include("Vars.inc");

//Conectamos con MySQL
$con = mysql_connect($host,$user,$password) or die("No se puede conectar a la BD");
$db = mysql_select_db($database) or die("No existe la Base de datos.");
//check connection


?>