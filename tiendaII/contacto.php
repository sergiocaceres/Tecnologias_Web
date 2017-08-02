<?php
//Importamos las variables del formulario de contacto

	@$nombre = addslashes($_POST['nombre']);
	@$email = addslashes($_POST['email']);
	@$web = addslashes($_POST['web']);
	@$mensaje = addslashes($_POST['mensaje']);

//Preparamos el mensaje de contacto
	$cabeceras = "From: $email\n" //La persona que envia el correo
	 . "Reply-To: $email\n";
	$asunto = "Mensaje desde la pagina Web"; //asunto aparecera en la bandeja del servidor de correo
	$email_to = "sergio_caceres_94@hotmail.com"; //cambiar por tu email
	$contenido = "$nombre ha enviado un mensaje desde la web www.miweb.com\n"
	. "\n"
	. "Nombre: $nombre\n"
	. "Email: $email\n"
	. "Sitio Web: $web\n"
	. "Mensaje: $mensaje\n"
	. "\n";

	//Enviamos el mensaje y comprobamos el resultado
	if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
		echo ' <script language="javascript">alert("La información ha sido enviada con exito");</script> ';
		header("refresh:0;index.php");
	} 
	else{ //Si el mensaje no se envía muestra el mensaje de error
		echo ' <script language="javascript">alert("Error, no se ha podido enviar el mensaje. Intentelo de nuevo");</script> ';
	 	header("refresh:0;formulario.php");
	}
?>
