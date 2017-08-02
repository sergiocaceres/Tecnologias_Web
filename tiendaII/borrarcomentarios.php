<?php session_start(); ?>
<?php
	//Fichero que borra los comentarios de los productos

	$fecha = $_POST['borrarcomentarios'];

	try{
		$mbd = new PDO("mysql:host=localhost;dbname=db75261260" , "x75261260" , "x75261260");
		$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

		$borrar = $mbd ->prepare("DELETE FROM Comentarios WHERE Fecha = :fecha");
		$borrar->bindParam(':fecha', $fecha);
		$borrar->execute();

		if($borrar->rowCount() == 0){ //Si no hay mensajes para borrar o no coincide con la fecha de los comentarios
			echo ' <script language="javascript">alert("No existen comentarios en este momento con la fecha indicada"); </script> ';
			header("refresh:0;index.php");
		}

		else{ //Hay mensajes para borrar
			echo ' <script language="javascript">alert("El mensaje ha sido borrado con \u00e9xito"); </script> ';
			header("refresh:0;index.php");
		}

	} 
	catch (PDOException $e) {
		print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
?>
