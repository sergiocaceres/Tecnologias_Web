<?php
	//Fichero que sirve para insertar en la base de datos el usuario que se registra o comprobar si ya existe un usuario creado con ese nick o ese correo

	$usuario = $_POST['Usuario'];
  	$nombre = $_POST['Nombre'];
	$email = $_POST['Email'];
	$clave = $_POST['Clave'];
	$clave2 = $_POST['Clave2'];
	$fecha = $_POST['Fechanacimiento'];
	$telefono = $_POST['Telefono'];


  	$mbd = new PDO("mysql:host=localhost;dbname=db75261260" , "x75261260" , "x75261260");

  	$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  	$sentencia1 = $mbd ->prepare("SELECT * FROM Usuarios WHERE Usuario = '$usuario' ");
  	$sentencia2 = $mbd ->prepare("SELECT * FROM Usuarios WHERE Email = '$email' ");
  	$sentencia1->bindParam(':usuario', $usuario);
  	$sentencia2->bindParam(':email', $email);
  	$sentencia1->execute();
  	$sentencia2->execute();


  	if($sentencia1->rowCount() > 0){//Si ya existe alguien registrado con ese nick.
    	echo ' <script language="javascript">alert("Error , ya existe un usuario registrado con el nick que est\u00e1 tratando de usar, por favor seleccione otro.");</script> ';
  		header("refresh:0;identificacion.php");

  	}elseif ($sentencia2->rowCount() > 0) { //Si ya existe un usuario con ese email
    	echo ' <script language="javascript">alert("Error , ya existe un usuario registrado con el mail que est\u00e1 tratando de usar, por favor seleccione otro.");</script> ';
		header("refresh:0;identificacion.php");

  	}else{ //Si no coinciden ni el correo ni el nick, entra
    	$mbd = new PDO("mysql:host=localhost;dbname=db75261260" , "x75261260" , "x75261260");

    	$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    	$insertar = $mbd ->prepare("INSERT INTO Usuarios (Usuario, Clave , Nombre , Fechanacimiento , Email, Telefono) VALUES (:Usuario, :Clave , :Nombre , :Fechanacimiento , :Email, :telefono)");

		$insertar->bindParam(':Usuario', $usuario);
		$insertar->bindParam(':Clave', $clave);
		$insertar->bindParam(':Nombre', $nombre);
		$insertar->bindParam(':Fechanacimiento', $fecha);
		$insertar->bindParam(':Email', $email);
		$insertar->bindParam(':telefono', $telefono);
		$insertar->execute();

		echo ' <script language="javascript">alert("Usuario registrado con \u00e9xito. Ahora debes loguearte"); </script> ';
		header("refresh:0;identificacion.php");

  	}

?>
