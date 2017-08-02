<?php session_start(); ?>
<!DOCTYPE html> 
	<head runat="server"> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<title>Tienda de Informática</title>
		 <link href="../estilos.css" rel="stylesheet" /> 
	</head>
	
	<body> 
		<section class = "contenedor">
			<section class = "publizquierda"> </section>
			<section class = "publiderecha"> </section>
			<section class = "central">
				<section class = "publicentral"> </section>
				<section class = "contenedorCentral">
					<section class = "nomtienda">
						<h1 align = "center"><a section class = "rojo" href = "../index.php"> Tienda de Sergio </a></h1>
					</section>
					<section class="secciones">
						<a href="../index.php">Portada &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="../images/separador_menu.png" border="0" /></section>

						<a href="../portatiles.php" align = "center">Portátiles &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="../images/separador_menu.png" border="0" /></section>

						<a href="../perifericos.php">Periféricos &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="../images/separador_menu.png" border="0" /></section>

						<a href="../sobremesa.php">Sobremesa &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="../images/separador_menu.png"  border="0" /></section>

						<a href="../investigacion.php">Investigación &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="../images/separador_menu.png" border="0" /></section>
			
						<a href="../formulario.php">Contacto &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="../images/separador_menu.png" border="0" /></section>

						<a href="../identificacion.php">Identifícate </a>
					</section> 

					<section class = "cerrarsesion">
					<?php

	  					if(isset($_SESSION['login']) == true && (isset ($_SESSION['admin']) && $_SESSION['admin'] == 0)){
					?>
					<h1>Bienvenido <?= $_SESSION['Usuario'] ?>, eres un usuario normal <a href="../logout.php">(Salir)</a></h1>
					<?php
	  					}
					?>
					<?php

	  					if(isset($_SESSION['admin'] ) && $_SESSION['admin'] == 1){
					?>
					<h1>Bienvenido <?= $_SESSION['Usuario'] ?>, eres el administrador <a href="../logout.php">(Salir)</a></h1>

					<?php
	  					}
					?>
					</section> </br></br>
					</br>


					<script language = "JavaScript" type = "text/javascript">
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					//Función para validar los comentarios
					function validarcomentarios(form){
						if(form.comentarios.value == ""){ //Miramos si el campo comentarios esta vacio
							alert("Error, debe introducir al menos 1 caracter");
							form_comentarios.focus();
							return false;
						}
						
						if(form.comentarios.value.length > 140){//Miramos si el campo comentarios no ocupe mas de 140
							alert("Error, debe introducir menos de 140 caracteres");
							form_comentarios.focus();
							return false;
						}

						form.submit(); //Si ha llegado hasta aqui es que no ha habido ningun error. Se envia el formulario
					}

					//Función para validar el borrado de los comentarios
					function validarborrarcomentarios(form){	
						if(form.borrarcomentarios.value == ""){ //Miramos si el campo borrarcomentarios esta vacio
							alert("Error, debe introducir la fecha");
							form_borrarcomentarios.focus();
							return false;
						}	
		
						form.submit(); //Si ha llegado hasta aqui es que no ha habido ningun error. Se envia el formulario
					}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					//Función para validar las noticias
					function validarnoticia(form){
						if(form.titulonoticia.value == ""){
							alert("Error, debe introducir un título");
							form_noticias.focus();
							return false;
						}

						if(form.noticiaBD.value == ""){
							alert("Error, debe introducir al menos 1 caracter en la noticia");
							form_noticias.focus();
							return false;
						}

						if(form.titulonoticia.value.length > 200){
							alert("Error, debe introducir un titulo con menos de 200 caracteres");
							form_noticias.focus();
							return false;
						}

						if(form.noticiaBD.value.length > 200){
							alert("Error, debe introducir una noticia con menos de 200 caracteres");
							form_noticias.focus();
							return false;
						}

						if(form.idnoticia.value.length > 0){
							alert("Error, el campo id debe estar vacio");
							form_noticias.focus();
							return false;
						}
						form.submit();
					}

					//Función para validar la modificacion de las noticias
					function validarmodificarnoticia(form){
						if(form.idnoticia.value == ""){
							alert("Error, debe introducir un id");
							form_noticias.focus();
							return false;
						}	

						else if(isNaN(form.idnoticia.value)){
								alert("Error,el id debe tener solo números");
								form_registro.focus();
								return false;
						}

						if(form.titulonoticia.value == ""){
							alert("Error, debe introducir un titulo");
							form_noticias.focus();
							return false;
						}	

						if(form.noticiaBD.value == ""){
							alert("Error, debe introducir una noticia");
							form_noticias.focus();
							return false;
						}	
						form.submit();
					}	

					//Función para validar el borrado de las noticias
					function validarborrarnoticia(form){
						if(form.borrarnoticias.value == ""){
							alert("Error, debe introducir un id");
							form_borrarnoticias.focus();
							return false;
						}	
						form.submit();
					}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					</script>

					<p section class="nombreseccion"> Periféricos </p>
     				<section class="productos">
             			<section class="fila">
   			            <section class="noticiasperifericos"> 
            				<article>
               					<h1>Oferta en Pen drives</h1> 

               					<img src="usb/usb.jpg" />

								<h2>Precio 40€ 
								</h2>

								<section class="caja">
									<p>Usb 3.0 con capacidades desde 8GB hasta 32GB. Muy baratos, ¡no los dejes escapar!</p>
									<span class="info">
									<?php
										try {
											$mbd = new PDO("mysql:host=localhost;dbname=db75261260" , "x75261260" , "x75261260");
											$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);  //Errores
											$sentencia = $mbd ->prepare("SELECT * FROM Noticias");
											$sentencia->execute();
											$resultado = $sentencia->fetchAll();
											foreach($resultado as $noticia) {
									?>				
									<h>Noticia: </h><a><?= $noticia['Cuerpo'] ?></a></br>
									<?php
											}	
										} catch (PDOException $e) {
											print "¡Error!: " . $e->getMessage() . "<br/>";
											die();
										}
 									?>
									</span>
								</section>
							</article>
						</section>
						</br>
						<h1 align = "center">Opiniones de los Usuarios</h1></br>
           				<?php
							try {
								$mbd = new PDO("mysql:host=localhost;dbname=db75261260" , "x75261260" , "x75261260");
								$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);  //Errores
								$sentencia = $mbd ->prepare("SELECT * FROM Comentarios");
								$sentencia->execute();
								$resultado = $sentencia->fetchAll();
								foreach($resultado as $comentario) {
						?>
           				<section class="opiniones"> 
							<h>Usuario: </h><?= $comentario['Usuario'] ?>&nbsp;&nbsp;&nbsp;<h>Fecha: </h><?= $comentario['Fecha'] ?></br>
							<?= $comentario['Cuerpo'] ?>
							
           				</section>
						<?php
								}
							} catch (PDOException $e) {
									print "¡Error!: " . $e->getMessage() . "<br/>";
									die();
								}
 						?>
						</br></br>
<!------------------------------------------------------FORMULARIOS------------------------------------------------------------>
						<h1 align = "center">Escribe tu comentario</h1></br>
           				<section class="comentarios">
							<form name = "form_comentarios" action = "../comentarios.php" method = "post">
								<textarea id = "comentarios" name = "comentarios" rows="07" cols="60"></textarea> 
								<input type = "button" id = "button1" value = "Enviar comentario" onclick="validarcomentarios(document.form_comentarios);"/>
							</form></br>
<!------------------------------------------------------------------------------------------------------------------------------>
							<?php
							if(isset($_SESSION['login']) == true && (isset ($_SESSION['admin']) && $_SESSION['admin'] == 1)){ //Se muestra solo si es administrador
							?>
							<form name = "form_borrarcomentarios" action = "../borrarcomentarios.php" method = "post">
								<input type = "text" id = "borrarcomentarios" name = "borrarcomentarios" placeholder="Introduzca la fecha " />
								<input type = "button" id = "button1" value = "Borrar comentario" onclick="validarborrarcomentarios(document.form_borrarcomentarios);" />
							</form>
							<?php
							}
							?>
           				</section> <! cierra ----- section class = "comentarios">
						</br></br></br></br>
<!------------------------------------------------------------------------------------------------------------------------------>
						<section class="derecha">
							<h1 align ="center"> Noticias relacionadas </h1></br>
							<?php
								try {
									$mbd = new PDO("mysql:host=localhost;dbname=db75261260" , "x75261260" , "x75261260");
									$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);  //Errores
									$sentencia = $mbd ->prepare("SELECT * FROM Noticias");
									$sentencia->execute();
									$resultado = $sentencia->fetchAll();
									foreach($resultado as $noticia) {
							?>
           					<section class="noticiasBD"> 

								<h><?= $noticia['Titulo'] ?></h></br>
								<?= $noticia['Cuerpo'] ?>
							
           					</section>

							<?php
									}
								} catch (PDOException $e) {
									print "¡Error!: " . $e->getMessage() . "<br/>";
									die();
								}
 							?>
						</br>
							
<!--------------------------------------------------FORMULARIO---------------------------------------------------------------->
							<?php
								if(isset($_SESSION['login']) == true && (isset ($_SESSION['admin']) && $_SESSION['admin'] == 1)){
							?>						
	
						<h1 align = "center">Escribe tu noticia</h1></br>
           				<section class="escribirnoticiaBD">
							<form name = "form_noticias" action = "../noticiaBD.php" method = "post">
								<input type = "text" id = "idnoticia" name = "idnoticia" placeholder="Introduzca el id" />
								<input type = "text" id = "titulonoticia" name = "titulonoticia" placeholder="Introduzca el titulo " />
								<textarea id = "noticiaBD" name = "noticiaBD" rows="07" cols="30" placeholder="Introduzca la noticia"></textarea> 
								<input type = "button" id = "button1" name = "botonenviar" value = "Enviar noticia" onclick="validarnoticia(document.form_noticias);"/>

								<input type = "button" id = "button2" name = "botonmodificar" value = "Modificar noticia" onclick="validarmodificarnoticia(document.form_noticias);"/>	
							</form></br>

<!------------------------------------------------------------------------------------------------------------------------------>
							<form name = "form_borrarnoticias" action = "../borrarnoticiaBD.php" method = "post">
								<input type = "text" id = "borrarnoticias" name = "borrarnoticias" placeholder="Introduzca el id" />
								<input type = "button" id = "button1" value = "Borrar noticia" onclick="validarborrarnoticia(document.form_borrarnoticias);"/>
							</form>
						</section> <! Cierra el escribirnoticiasBD>
							<?php
								}
							?>
           				
						</br></br>


							<h1 align ="center"> Publicidad </h1></br>
							<h1 align ="center"><img src="../images/publicidad.jpg" /></h1>
						</section>
					</section>
				</section>
				
				<section class="piepagina">
					<p> C/ La Trastienda nº 23</p>
						<p> 950235693 / 658129004 </p>
						<p> tiendasergio@hotmail.com </p>
						<p> Realizado por Sergio Cáceres Pintor </p>
						<p> <a href="../comosehizo.pdf" target ="_blank">Cómo se hizo</a></p>
						</br>
						<p>&#169 Copyright </p>
				</section>
			</section>
		</section>
	</body>
</html>
