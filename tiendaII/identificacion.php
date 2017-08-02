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
					</section> </br></br>
					</br>

					<script language = "JavaScript" type = "text/javascript">

						//Función para ver si el email es correcto o no
						function validaremail(email){
							expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-z0-9\-])+\.)+([a-zA-z0-9]{2,4})+$/;
							if( !expr.test(email) )
								return false;
							return true;
						}
						
						//Función para validar el login
						function validarlogin(form){
							if(form.Usuario.value == ""){ //Miramos si el campo usuario esta vacio
								alert("Error, debe introducir el nick");
								form_login.focus();
								return false;
							}

							if(form.Clave.value == ""){ //Miramos si el campo clave esta vacio
								alert("Error, debe introducir la contraseña");
								form_login.focus();
								return false;
							}
							form.submit(); //Si ha llegado hasta aqui es que no ha habido ningun error. Se envia el formulario
						}

						//Función para validar el registro
						function validarresgistro(form){
							if(form.Usuario.value == ""){ //Miramos si el campo usuario esta vacio
								alert("Error, debe introducir el nick");
								form_registro.focus();
								return false;
							}

							//Miramos si el campo usuario contiene menos de 5 o mas de 20 caracteres
							if(form.Usuario.value.length < 5 || form.Usuario.value.length > 20 ){
								alert("Error,el Nick debe tener entre 5 y 19 caracteres");
								form_registro.focus();
								return false;
							}

							if(form.Clave.value == ""){ //Miramos si el campo clave esta vacio
								alert("Error, debe introducir la contraseña");
								form_registro.focus();
								return false;
							}

							//Miramos si el campo clave contiene menos de 5 o mas de 20 caracteres
							if(form.Clave.value.length < 5 || form.Clave.value.length > 20 ){
								alert("Error,la Contraseña debe tener entre 5 y 19 caracteres");
								form_registro.focus();
								return false;
							}

							if(form.Clave2.value == ""){ //Miramos si el campo clave2 esta vacio
								alert("Error, debe introducir la contraseña");
								form_registro.focus();
								return false;
							}

							//Miramos si las claves no coinciden
							if(form.Clave.value != form.Clave2.value){
								alert("Error, las contraseñas no conciden");
								form_registro.focus();
								return false; 
							}

							if(form.Nombre.value == ""){ //Miramos si el campo nombre esta vacio
								alert("Error, debe introducir el nombre y los apellidos");
								form_registro.focus();
								return false;
							}

							//Miramos si el campo nombre contiene mas de 50 caracteres
							if(form.Nombre.value.length > 50 ){
								alert("Error,el nombre debe tener como máximo 49 caracteres");
								form_registro.focus();
								return false;
							}

							if(form.Telefono.value == ""){ //Miramos si el campo telefono esta vacio
								alert("Error, debe introducir el teléfono");
								form_registro.focus();
								return false;
							}

							//Miramos si el campo telefono es distinto de 9 numeros
							if(form.Telefono.value.length != 9){
								alert("Error,el teléfono debe tener entre 9 dígitos");
								form_registro.focus();
								return false;
							}
							//Miramos que lo introducido sean solo numeros, no haya caracteres
							else if(isNaN(form.Telefono.value)){
								alert("Error,el teléfono debe tener solo números");
								form_registro.focus();
								return false;
							}

							if(form.Fechanacimiento.value == ""){ //Miramos si el campo fechanacimiento esta vacio
								alert("Error, debe introducir la Fecha de nacimiento");
								form_registro.focus();
								return false;
							}

							if(form.Email.value == ""){ //Miramos si el campo e-mail esta vacio
								alert("Error, debe introducir el E-mail");
								form_registro.focus();
								return false;
							}
														
							//Llamamos a la funcion validaremail que nos decia si era correcto o no, aqui lo comprobamos
							if(!validaremail(form.Email.value)){
								alert("Error,el e-mail introducido no es válido.");
								form_registro.focus();
								return false;			
							}
							
							form.submit();//Si ha llegado hasta aqui es que no ha habido ningun error. Se envia el formulario
						}
	
					</script>

					<p section class="nombreseccion"> Identifícate </p>


					 <section class="cuerpoform">
						<section class="registro">
							<h3 align=center>Registro</h3>
							<form name = "form_registro" action = "validar.php" method = "post">

							<label for="Usuario">Nick</label></br>
							<input type = "text" id = "Usuario" name = "Usuario" placeholder="Introduzca nick" />
							</br></br>
							
							<label for="Nombre">Contraseña</label></br>
							<input type = "password" id = "Clave" name = "Clave" />
							</br></br>

							<label for="Nombre">Repita Contraseña</label></br>
							<input type = "password" id = "Clave2" name = "Clave2" />
							</br></br>
						
							<label for="Nombre">Nombre y Apellidos</label></br>
							<input type = "text" id = "Nombre" name = "Nombre" placeholder="Nombre y Apellidos" />
							</br></br>

							<label for="Nombre">Número de teléfono</label></br>
							<input type = "text" id = "Telefono" name = "Telefono" placeholder="Introduzca teléfono" />
							</br></br>
								
							<label for="Fecha de Nacimiento">Fecha de Nacimiento</label></br>
							<input type = "date" id = "date" name = "Fechanacimiento">
							</br></br>

							<label for="Nombre">E-mail</label></br>
							<input type = "email" id = "Email" name = "Email" placeholder="nombre@ejemplo.com" />

							</br></br>

							<input type = "button" id = "button1" value = "Registrarse" onclick="validarresgistro(document.form_registro);"/>
							</form>
						</section>
						</br>

						<section class="login">
							<form name = "form_login" action = "login.php" method = "post">
							<h3 align=center>Iniciar sesión</h3>

							<label for="usuario">Nick</label></br>
							<input type = "text" id = "Usuario" name="Usuario" placeholder="Nick de usuario" />
							</br></br>
							<label for="contraseña" >Contraseña</label></br>
							<input type = "password" id = "Clave" name="Clave" />

							</br></br>

							<input type = "button" id = "button1" value = "Entrar" onclick="validarlogin(document.form_login);"/>
							</form>						
						</section>
					</section>

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
