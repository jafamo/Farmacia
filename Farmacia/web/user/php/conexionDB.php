<?php
/*
 * Program:	ConexionDB.php
 * Desc:	This script connect with database using file Vars.inc
 *		and test conection and show mistakes.
 */
include("Vars.inc");

$link = mysqli_connect($host,$user,$password,$database) or die("Error ....." . mysqli_error($link)); 

echo $link;

?>