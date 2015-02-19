<?php
include("class.phpmailer.php");
include("class.smtp.php");

//$minombre=$_POST["nombre"];
$miemail=$_POST["email"];
$miasunto=$_POST["mensaje"];

//la cuenta a la que sera enviada
$micorreo="cuenta@gmail.com";
$mipassword="password";

$mail = new PHPMailer();

$mail->SetLanguage("es", 'language/');
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = "465";
$mail->Username = $micorreo;
$mail->Password = $mipassword;

$mail->From = $miemail;
$mail->FromName = $miemail;
$mail->Subject = "Advertenca Farmacia";
$mail->AltBody = $miasunto;
$mail->MsgHTML($miasunto);
//$mail->AddAttachment("files/files.zip");
//$mail->AddAttachment("files/img03.jpg");
//donde se envia el mensaje
$mail->AddAddress($miemail, $miemail);
$mail->IsHTML(true);

if(!$mail->Send()) {
  echo "Mensaje no Enviado";
  
  echo "Redireccionando a la pagina de inicio";
  //header('Location : ../index.html');

} else {
	   
	
	echo "<p><h2>Mensaje Enviado</h2></p>";
	Echo "<a href=http://localhost/Farmacia_testing/>Volver a Inicio</a>";
	//header("refresh:0;url= ../index.html");
  
}
?>