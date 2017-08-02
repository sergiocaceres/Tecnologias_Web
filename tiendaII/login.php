<?php session_start(); ?>
<?php

$error = NULL;

if(isset($_POST['Usuario'])) {
	$Usuario = $_POST['Usuario'];
	$Clave = $_POST['Clave'];

	try {
		$mbd = new PDO("mysql:host=localhost;dbname=db75261260" , "x75261260" , "x75261260");
		$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);  //Errores

		$sentencia = $mbd ->prepare("SELECT * FROM Usuarios WHERE Usuario = :Usuario AND Clave = :Clave");
		$sentencia->bindParam(':Usuario', $Usuario); 
		$sentencia->bindParam(':Clave', $Clave); 
		$sentencia->execute();

		if($sentencia->rowCount() > 0){
			$user = $sentencia->fetch();
			$_SESSION['login'] = true;
			$_SESSION['Usuario'] = $Usuario;
			$_SESSION['admin'] = $user['admin'];	
			echo ' <script language="javascript">alert("Has entrado con \u00e9xito"); </script> ';
			header("refresh:0;index.php");
		}
		else {
			$_SESSION['login'] = false;
			echo ' <script language="javascript">alert("Error, el usuario no existe"); </script> ';
			header("refresh:0;identificacion.php");
		}

	} 
	catch (PDOException $e) {
		print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
}

?>
