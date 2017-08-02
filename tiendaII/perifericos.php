<?php session_start(); ?>
<!DOCTYPE html> 
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
					var i = 0;
					var ruta_slider1 = new Array();

					ruta_slider1[0] = "images/publi1.jpg";
					ruta_slider1[1] = "images/publi2.jpg";
					ruta_slider1[2] = "images/publi3.jpg";
					ruta_slider1[3] = "images/publi4.jpg";
					ruta_slider1[4] = "images/publi5.jpg";

					function cambiarImagen()
					{
						document.slide.src = ruta_slider1[i];

						if (i < ruta_slider1.length - 1)
							i++;
						else
							i = 0;
						setTimeout("cambiarImagen()", 3000);
					}
					window.onload = cambiarImagen;

					</script>

					<p section class="nombreseccion"> Periféricos </p>
					<section class="noticiadestacadaperifericos">
						<a href="perifericos/teclado.php">Teclado inalámbrico </a>
           				<img src="perifericos/teclado/teclado.jpg"/>
           				<p> Teclado Inalámbrico con alcance de hasta 10 metros y Touchpad multitáctil .
El teclado inalámbrico Logitech Wireless Touch Keyboard K400 es un atractivo teclado con cómodas teclas planas con las que podrás escribir con total comodsection classad. El radio de acción del wifi es de hasta 10 metros, lo que te permitirá desplazarte con el teclado pudiendo dejar el dispositivo a gran distancia sin perder el control.</p>
					</section>


					<section class="productos">
             			<section class="fila">
           					<section class="izquierda">
            					<section class="perifericos"> 
               						<a href="perifericos/raton.php">" Ratón inalámbrico "</a> 
               						<img src="perifericos/raton/raton.jpg" />
              						<p> Logitech® Wireless Mouse M175. Ratón sencillo y fiable con Plug and Play inalámbrico. La comodsection classad y la libertad de un dispositivo inalámbrico con la fiabilsection classad de uno con cable: transmisión de datos rapsection classísima sin apenas retrasos ni interrupciones. </p>
           						</section> 

           						<section class="perifericos"> 
									<a href="perifericos/disco_duro_externo.php">" Disco duro 1TB " </a> 
								    <img src="perifericos/disco_duro_externo/disco_duro_externo.jpg" width='100' height='300' />
								    <p> Con el disco duro Toshiba Canvio Basic podrás transferir con rapsection classez tus archivos gracias al SuperSpeed USB 3.0. Pero si tienes un hardware más antiguo, no te precupes, porque con este disco duro podrás conectarte ya que es compatible con USB 2.0. </p>
           						</section> 
        					</section>

				
							<section class="centro">
           						<section class="perifericos"> 
									<a href="perifericos/altavoz.php">" Altavoz " </a>
          				 			<img src="perifericos/altavoz/altavoz.jpg" />
          	 						<p>A pesar de lo que le puedan decir los ojos, Jabra Solemate™ Mini tiene dos altavoces potentes y una batería que le permite disfrutar de 8 horas de reproducción. Escuche su música sin cables o utilice el práctico cable de la base. </p>
           						</section>

            					<section class="perifericos"> 
               						<a href="perifericos/impresora.php">" Impresora "</a> 
								    <img src="perifericos/impresora/impresora.jpg" />
								    <p> Imprime en papel fotográfico y en tamaños A3+, A3, A4 e impresión directa en discos. Retoca tus fotos con el software inclusection classo en esta impresora: PrintStudioPro, Colour Management Tool Pro (descarga), My Image Garden con Full HD Movie Print, Easy-WebPrint EX (descarga) y Quick Menu.</p>
           						</section> 
        					</section> 

							<section class="derecha">
            					<h1 align ="center"> Publicidad </h1></br>
								<h1 align = "center"><img name = "slide" alt= "imagen cambiante" src = "images/publi1.png">
            					<h1 align ="center"><img src="images/publicidad.jpg" /></h1>
								<img src="images/publicidad2.jpg" />
								</br>
								</br>
								<h1 align ="center"> Noticias deportivas </h1></br>
								<section class="ultimasnoticiasdeportivas">
									<ul>
										<li><a href="http://www.20minutos.es/deportes/noticia/real-madrsection class-ficha-lateral-derecho-danilo-brasileno-oporto-2421196/0/" target ="_blank">El Real Madrsection class ficha a Danilo por 31.5M, procedente del Oporto</a></li>
										<li><a href="http://udalmeria.section classeal.es/noticias/201504/01/fran-velez-deja-cuadro-20150401005323-v.html" target ="_blank">El central del Almeria, Fran Vélez, deberá pasar por quirófano y se pierde toda la temporada </a></li>
								</section>
   							</section>
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
	</body>
</html>
