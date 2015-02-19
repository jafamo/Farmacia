<!DOCTYPE html>

<html>

<head>
	<title>Principal arriba</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/arriba.css">
</head>



<body>



<?php
$nombreUser=$_GET['usuario'];
echo "<text-align='left'>Usuario: <b>$nombreUser</b></text-align>";
?>

<div class="menu_simple">
 <ul>
  <li><a href="principal.html" target="principal">  Inicio</a></li>
  <li><a href="salir.php"  target="_parent">  Salir</a></li>
  <li><a href="Contacto/formulario.html"  target="principal">Contacto</a></li>
  <li><a href="about.asp" target="principal">Ayuda</a></li>
</ul> 
</div>
</center>
</body>

</html>
