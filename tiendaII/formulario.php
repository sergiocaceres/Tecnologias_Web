<?php session_start(); ?>
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head runat="server"> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<title>Tienda de Informática</title>
		 <link href="estilos.css" rel="stylesheet" /> 
	</head>

	<body> 
		<section class = "contenedor">
			<section class = "publizquierda"> </section>
			<section class = "publiderecha"> </section>
			<section class = "central">
				<section class = "publicentral"> </section>
				<section class = "contenedorCentral">
					<section class = "nomtienda">
						<h1 align = "center"><a section class = "rojo" href = "index.php"> Tienda de Sergio </a></h1>
					</section>

					<section class="secciones">
						<a href="index.php">Portada &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="images/separador_menu.png" border="0" /></section>

						<a href="portatiles.php" align = "center">Portátiles &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="images/separador_menu.png" border="0" /></section>

						<a href="perifericos.php">Periféricos &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="images/separador_menu.png" border="0" /></section>

						<a href="sobremesa.php">Sobremesa &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="images/separador_menu.png"  border="0" /></section>

						<a href="investigacion.php">Investigación &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="images/separador_menu.png" border="0" /></section>
			
						<a href="formulario.php">Contacto &nbsp;&nbsp;&nbsp;</a>
						<section class="barramenu"><img src="images/separador_menu.png" border="0" /></section>

						<a href="identificacion.php">Identifícate </a>
					</section>

					<section class = "cerrarsesion">
						<?php

	  					if(isset($_SESSION['login']) == true && (isset ($_SESSION['admin']) && $_SESSION['admin'] == 0)){
					?>
					<h1>Bienvenido <?= $_SESSION['Usuario'] ?>, eres un usuario normal <a href="logout.php">(Salir)</a></h1>
					<?php
	  					}
					?>
					<?php

	  					if(isset($_SESSION['admin'] ) && $_SESSION['admin'] == 1){
					?>
					<h1>Bienvenido <?= $_SESSION['Usuario'] ?>, eres el administrador <a href="logout.php">(Salir)</a></h1>

					<?php
	  					}
					?>
					</section> </br></br></br>
					<p section class="nombreseccion"> Contacto </p>


					<form class="contact_form" action="contacto.php" section="contact_form" runat="server" method = "post"> 
						<section> 
							<ul> 
								<li> 
									<h2>Contacta con nosotros</h2> <span class="required_notification">* Datos requeridos</span> 
								</li> 
								<li> 
									<label for="name">Nombre:</label> 
									<input name = "nombre" type="text" placeholder="Nombre Apellidos" required /> 
								</li> 
								<li> 
									<label for="email">Email:</label> 
									<input name = "email" type="email" name="email" placeholder="usuario@ejemplo.com" required /> 
									<span class="form_hint">Formato correcto: "nombre@ejemplo.com"</span> 
								</li> 
								<li> 
									<label for="website">Sitio web:</label> 
									<input name ="web" type="url" name="website" placeholder="http://ejemplo.com" required pattern="(http|https)://.+" /> 
									<span class="form_hint">Formato correcto: "http://ejemplo.com"</span> 
								</li> 
								<li> 
									<label for="mensaje">Mensaje:</label> 
									<textarea name="mensaje" cols="40" rows="6" required></textarea> 
								</li> 
								<li> 
									<button class="submit" id = "button1" type="submit">Enviar mensaje</button> 
								</li> 
							</ul> 
						</section> 
					</form> 

					<section class="piepagina">
						<p> C/ La Trastienda nº 23</p>
						<p> 950235693 / 658129004 </p>
						<p> tiendasergio@hotmail.com </p>
						<p> Realizado por Sergio Cáceres Pintor </p>
						<p> <a href="comosehizo.pdf" target ="_blank">Cómo se hizo</a></p>
						</br>
						<p>&#169 Copyright </p>
					</section>
				</section>
			</section>
		</section>
	</body>
</html>
