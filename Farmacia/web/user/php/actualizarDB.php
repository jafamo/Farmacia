<?php

//el nombre del fichero.cvs
$filename=$_POST['filename'];

//comprobamos el fichero
$extension=end(explode(".",$filename));
if($extension =="csv")
{
	echo "<br>La extension:   ";
	echo $extension;
	echo "<br>";
	//creamos la conexion
	include("conexionDB.php");


	$queryUpdate="UPDATE Productos1 INNER JOIN Productos on Productos.Codigo=Productos1.Codigo SET Productos1.Unidades=Productos.Unidades+Productos1.Unidades";

	if(mysqli_query($conexion,$queryUpdate)){
		echo "La base de datos ha sido actualzada correctamente";
		echo "<br>";
		echo "El fichero cargado es el siguiente";
		echo $filename;
	}
	else{
		echo "Error!!! No se ha podido actualizar ".mysqli_error($conexion);
	}

	//cerramos la conexion.
	mysqli_close($conexion);

}//fin del if de comprobar la extension

else{
	echo "<br>";
	echo "<center><font color='red'>";
	echo "<img src='../images/symbol-error.png'></img>";
	echo "<h1>Error al cargar el archivo";
	echo "<br></h1>";
	echo "El archivo debe de tener la extension .CSV";
	echo "</center></font>";
}


?>
