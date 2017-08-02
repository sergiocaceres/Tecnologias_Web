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

					<p section class="nombreseccion"> Investigación </p>
     				<section class="productos">
             			<section class="fila">
   			            <section section class="noticiasinvestigaciones"> 
            				<article>
               					<h1>Nuevos campos de investigación de la Ingeniería Informática</h1> 

               					<img src="campos_de_investigacion/campos_de_investigacion.jpg" />

								<h2>Las investigaciónes apuntan a la Domótica, la automatización de procesos de negocios o redes sociales son los nuevos campos de investigación de la ingeniería informática. Sistemas capaces de automatizar una vivienda, aportando servicios de gestión energética, segursection classad, bienestar y comunicación.
								</h2>

								<section class="caja">
									<p>La denominada minería de datos, la ingeniería de software, los algoritmos en redes sociales, todo lo relacionado con la segursection classad informática, la automatización de los procesos de negocios y la domótica, son a groso modo las materias que centran las líneas de investigación que desarrolla el Departamento de Lenguajes y Sistemas Informáticos de la Universsection classad de Sevilla. Un Departamento coordinado por el que haya ssection classo galardonado con el Premio Fama 2012 a la Trayectoria Investigadora en Ingeniería y Arquitectura, el Catedrático Miguel Toro Bonilla, quien reivindica la necessection classad de desarrollar “una investigación que surja como respuesta a un problema, a una necessection classad del entorno, y no a la inversa, con un enfoque ingenieril que conecte de forma directa con ese tejsection classo empresarial internacional y que sea capaz de vender un producto al mercado”.

								En lo que compete a la Ingeniería de Software, el profesor Rafael Corchuelo desarrolla section classeas, conceptos y herramientas adecuadas para enfrentarse a la complejsection classad de las aplicaciones basadas en la Web. De su Grupo de Investigación han surgsection classo ya dos nuevas spin-off.
 
Por su parte, el profesor Antonio Ruiz dirige trabajos relacionados con la producción de software como línea de producto, la automatización de la verificación de la calsection classad de los servicios informáticos y la de los procesos de negocios. Y el equipo de María José Escalona profundiza, entre otras muchas cuestiones, en asegurar parámetros de calsection classad en la producción de software.

								Investigaciones sobre redes sociales, lsection classerada por el profesor José Antonio Troyano; sobre segursection classad en aplicaciones informáticas, que coordina Rafael Martínez; todo lo relacionado con informática del hogar y de la salud, dirigsection classo por Juan Antonio Ortega; y el trabajo de investigación del grupo de Carmelo del Valle, gerente de Fsection classETIA, sobre automatización de negocios, completan la labor investigadora de este Departamento.

“La section classea, insisto es que las escuelas de Ingeniería en general y las de  Informática en particular deben tener como misión generar el conocimiento tecnológico. Desde este punto de vista el Ingeniero Informático tiene como papel fundamental contribuir a generar el conocimiento tecnológico necesario en el campo de las TICs, así como contribuir a adecuar el conocimiento tecnológico disponible a nivel internacional a las empresas españolas. El Ingeniero Informático es una pieza clave en el desarrollo económico basado en el conocimiento que necesita la sociedad española y debe detectar qué problema hay a su alrededor para darle más tarde una solución”, defiende el Catedrático Miguel Toro, quien hace hincapié en la necessection classad de hacer un tipo e investigación “útil para el mundo que nos rodea”.</p>
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
