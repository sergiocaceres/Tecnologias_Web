<?php session_start(); ?>
<?php

	//Fichero para insertar noticias en la base de datos y para modificarlas

	$noticia = $_POST['noticiaBD'];
	$titulonoticia = $_POST['titulonoticia'];
	$idnoticia = $_POST['idnoticia'];

	if($idnoticia==""){ //Si el id de la noticia esta vacio
		try{
			if($_SESSION['login'] == true && $_SESSION['admin'] == 1){
				$mbd = new PDO("mysql:host=localhost;dbname=dbxxx" , "xxx" , "xxx");
				$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

				$insertar = $mbd ->prepare("INSERT INTO Noticias (Titulo, Fecha, Cuerpo) VALUES (:titulonoticia, NOW(), :noticiaBD)");

				$insertar->bindParam(':noticiaBD', $noticia);
				$insertar->bindParam(':titulonoticia', $titulonoticia);
				$insertar->execute();

				echo ' <script language="javascript">alert("La noticia ha sido enviada con \u00e9xito"); </script> ';
				header("refresh:0;index.php");
			}
			else{
				echo ' <script language="javascript">alert("Debe ser administrador para escribir una noticia"); </script> ';
				header("refresh:0;identificacion.php");
			}
		} 
		catch (PDOException $e) {
			print "¡Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
	} 
	else{
		$idmodificarnoticia = $_POST['idnoticia'];
		$titulonoticia = $_POST['titulonoticia'];
		$noticiaBD = $_POST['noticiaBD'];

		try{
			//if($_SESSION['login'] == true && $_SESSION['admin'] == 1){ No lo hacemos porque lo tenemos oculto a usuarios normales
			$mbd = new PDO("mysql:host=localhost;dbname=dbxxx" , "xxx" , "xxx");
			$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

			$borrar = $mbd ->prepare("DELETE FROM Noticias WHERE IdNoticia = :idnoticia");
			$borrar->bindParam(':idnoticia', $idmodificarnoticia);
			$borrar->execute();

			if($borrar->rowCount() != 0){ //Si el borrado por el id ha tenido éxito, entra aquí
				$insertar = $mbd ->prepare("INSERT INTO Noticias (Titulo, Fecha, Cuerpo) VALUES (:titulonoticia, NOW(), :noticiaBD)");
				$insertar->bindParam(':noticiaBD', $noticia);
				$insertar->bindParam(':titulonoticia', $titulonoticia);
				$insertar->execute();			

				if($insertar->rowCount() < 0){ //Si no ha sido posible insertar la noticia
					echo ' <script language="javascript">alert("No ha sido posible insertar la noticia"); </script> ';
					header("refresh:0;index.php");	
				}
				else{	//La noticia se ha insertado bien
					echo ' <script language="javascript">alert("Noticia modificada con \u00e9xito"); </script> ';
					header("refresh:0;index.php");
				}
			}
			else{ //El borrado no se ha podido realizar porque los ID no coinciden
				echo ' <script language="javascript">alert("No existen noticias con ese id"); </script> ';
				header("refresh:0;index.php");	
			}
		}
	 	catch (PDOException $e) {
			    print "¡Error!: " . $e->getMessage() . "<br/>";
			    die();
		}
	}
?>
