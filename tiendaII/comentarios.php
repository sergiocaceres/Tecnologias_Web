<?php session_start(); ?>
<?php
	//Fichero para insertar los comentarios en la base de datos

	try{
		if(isset($_SESSION['login']) && $_SESSION['login'] == true){
			$cuerpo = $_POST['comentarios'];
			$sesion = $_SESSION['Usuario'];

			$mbd = new PDO("mysql:host=localhost;dbname=db75261260" , "x75261260" , "x75261260");

			$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

			$insertar = $mbd ->prepare("INSERT INTO Comentarios (Cuerpo, Fecha, Usuario) VALUES (:comentarios, NOW(), :sesion)");
			$insertar->bindParam(':comentarios', $cuerpo);
			$insertar->bindParam(':sesion', $sesion);
			$insertar->execute();

			echo ' <script language="javascript">alert("El mensaje ha sido enviado con \u00e9xito"); </script> ';
			header("refresh:0;index.php");
		}
		else{
			echo ' <script language="javascript">alert("Debe registrarse para escribir un comentario"); </script> ';
			header("refresh:0;identificacion.php");
		}
	} 
	catch (PDOException $e) {
		print "¡Error!: " . $e->getMessage() . "<br/>";
		die();
	}
?>
