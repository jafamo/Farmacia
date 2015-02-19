<?php 

/*
 * Program:	queryLogin.php
 * Desc:	Query with connection database for Login.html
 *
 *
 */

include("conexionDB.php");
include("make_safe.php");

//recogemos los valores del formulario en modo seguro.(make_safe.php)
$nombre = make_safe($_POST['login']);
$pas = $_POST['password'];
$otra = sha1($pas);


//buscamos el password de la persona.
$queryPassDB = "SELECT * FROM Usuarios ";
//$queryNombre = "SELECT nombre FROM Usuarios";

$resultado=mysql_query($queryPassDB);
//$resultadoNombre= mysql_query($queryNombre);

if(!$resultado){
	echo "No se puede ejecutar la accion.".mysqli_error();
	exit;
}


$registro=mysql_fetch_assoc($resultado);
$passDB = $registro["Password"];

if($nombre == $registro["nombre"] && $registro["Password"] == sha1($pas)  )
{
	echo "<br>Sacando el registro:".$registro["nombre"];
	echo "<br>Sacando el registro:".$registro["Password"];
	//hay que hacer un Location hacia: ../../intranet/index.php
	header("Location: ../../intranet/index.php");
}
else
{
	echo "mala suerte";
}


mysql_close($con);


?>
