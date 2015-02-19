<?php 

/*
 * Program:	queryLogin.php
 * Desc:	Query with connection database for Login.html
 *
 *
 */
//Creamos la sesion para el usuario.

//creamos una sesion del usuario
session_start();




include("../conexionDB.php");
include("../../functions/make_safe.php");

//recogemos los valores del formulario en modo seguro.
$nombre = make_safe($_POST['login']);
$password = make_safe($_POST['password']);


$result = mysql_query ("SELECT nombre FROM Usuarios as U WHERE U.Nombre='".$nombre." ' and U.password='".$password." '",$conexion )
or die("Error en la consulta SQL");


//comprobamos que los valores del formulario no esten en blanco
  if(mysql_num_rows($result)!=0){
	//session_start();
	//session_register("autentificado");
	//$autentificado="SI";
//header("Location: ../../../formulario/help.html");
header("Location: ../../../formulario/Usuario/index.php?usuario=".$nombre);
$_SESSION["user"]=$nombre;
}
  else{
  //Retornamos a el formulario de Login.html
  
//header("Location: ../../../../formulario/contador/index.php?usuario=".$nombre);
header("Location: ../../../formulario/contact.html");
/*
while ($resUser = mysql_fetch_assoc($result)) {
   echo $resUser['Nombre']."<br>";
   echo $resUser['Password'];
}
*/
}


mysql_free_result($result);
mysql_close();

?>
