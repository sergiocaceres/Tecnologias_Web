<?php session_start(); ?>
<?php
	//Fichero para borrar las noticias de los productos

	$id = $_POST['borrarnoticias'];

	try{
		$mbd = new PDO("mysql:host=localhost;dbname=dbxxx" , "xxx" , "xxx");
		$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

		$borrar = $mbd ->prepare("DELETE FROM Noticias WHERE IdNoticia = :id");
		$borrar->bindParam(':id', $id);
		$borrar->execute();

		if($borrar->rowCount() == 0){ //Si no hay noticias para borrar o no coincide con el id de las noticias
			echo ' <script language="javascript">alert("No existen noticias en este momento con el id indicado"); </script> ';
			header("refresh:0;index.php");
		}
	
		else{ //Hay mensajes para borrar
			echo ' <script language="javascript">alert("La noticia ha sido borrada con \u00e9xito"); </script> ';
			header("refresh:0;index.php");
		}

	} 
	catch (PDOException $e) {
		print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
?>
