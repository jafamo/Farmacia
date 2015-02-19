<!DOCTYPE html>

<?php
$usuario=$_GET['usuario'];
$_SESSION["user"]=$_REQUEST["usuario"];
$usuario = $_SESSION["user"];

?>
<html>

<head>
	<title>Pagina principal</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



<frameset rows="14%,*">
    <frame name="arriba" src="arriba.php?usuario=<?php echo $usuario;?>"> marginwidth="11" marginheight="11" noresize scrolling="no" frameborder="0">
    <frameset cols="18%,*">
      <frame name="menu" src="menu.html" marginwidth="5" marginheight="5" noresize scrolling="no" frameborder="0">
      <frame name="principal" src="principal.html" marginwidth="10" marginheight="10" noresize scrolling="no" frameborder="0">
    <frameset>
  <frameset>

</head>





  
</html> 






<body>


</body>

</html>
