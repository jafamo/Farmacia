<!DOCTYPE html>

<!-- Write your comments here -->
<html>

<head>
	<title>Carga Excel</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../css/style1.css">

</head>

<body>

	<h2>Instrucciones para cargar el fichero excel</h2><br><br>

<ol type="1">
	<li>Abrir el fichero excel que hay que cargar en la base de datos</li><br><br>
	<li>Guardar el fichero como archivo .cvs</li><br><br>
	<li>Cargar el nuevo fichero .cvs en el boton de abajo</li><br><br>
</ol>

<form action="actualizarDB.php" method="post">
	
		
	Selecciona el fichero: <input type="file" name="filename">  </input><br><br> 
	Actualizar: <input type="submit" name="enviar" value="Actualizar" />

	
</form>

</p>
</body>

</html>
