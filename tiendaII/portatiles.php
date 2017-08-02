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

					<p section class="nombreseccion"> Portátiles </p>
					<section section class="noticiadestacadaportatiles">
					<a href="portatiles/portatiles_macbook.php">Portatil Macbook pro </a>
           <img src="portatiles/portatiles_macbook/portatiles_macbook.jpg"/>
           <p> Procesador Intel Core i5 de doble núcleo a 1,6 GHz. Turbo Boost hasta 2,7 GHz. Intel HD Graphics 6000. 4 GB de memoria. 256 GB de almacenamiento flash</p>
					</section>


					<section class="productos">
             			<section class="fila">
           					<section class="izquierda">
            					<section class="portatiles"> 
               						<a href="portatiles/portatiles_toshiba.php">" Toshiba "</a> 
               						<img src="portatiles/portatiles_toshiba/portatiles_toshiba.jpg" />
              						<p> Pero la calsection classad no sólo está en su pantalla táctil de 11.6" HD, está en cada parte de él, como en su interior, donde alberga un procesador Intel® Celeron® N2840 y 4GB de RAM para que siempre disfrutes de un buen rendimiento.
Para guardar toda tu vsection classa dentro del Toshiba Radius, han inclusection classo un disco duro de 500GB, que te permitirá olvsection classarte de los problemas de espacio.
Y obviamente, también pone a tu disposición todo tipo de conexiones y hasta una Webcam HD para tus vídeollamadas. Llamadas que oirás con total nitsection classez gracias a los altavoces estéreo integrados con tecnología  DTS® Sound™.
Sé tan versátil como el nuevo 2 en 1 convertible Toshiba Satellite Radius L10W-B-101 y dale una vuelta a tu mundo.  </p>
           						</section> 

           						<section class="portatiles"> 
									<a href="portatiles/portatiles_acer.php">" Acer Aspire " </a> 
								    <img src="portatiles/portatiles_acer/portatiles_acer.jpg" />
								    <p> Las mejores características en un práctico tamaño. Portátiles delgados y ligeros, de 1 1.6”a 14’ sucesores de los netbooks, con potentes características al alcance de la mano. section classeales para viajar y para la movilsection classad diaria, con numerosas herramientas de conectivsection classad  </p>
           						</section> 
        					</section>

				
							<section class="centro">
           						<section class="portatiles"> 
									<a href="portatiles/portatiles_lenovo.php">" Lenovo G50-70 " </a>
          				 			<img src="portatiles/portatiles_lenovo/portatiles_lenovo.jpg" />
          	 						<p>Con este modelo G50-70 obtendrás un impresionant procesador Intel Core i7, RAM de 8GB y gráfica AMD Radeon R5 dedicada de 2GB. Y por este motivo, nos encontramos delante un portátil que es section classeal para Gaming, para trabajar con vsection classeos o con programas de modelación en 3D. </p>
           						</section>

            					<section class="portatiles"> 
               						<a href="portatiles/portatiles_compaq.php">" Compaq Presario c700 "</a> 
								    <img src="portatiles/portatiles_compaq/portatiles_compaq.jpg" />
								    <p> Perfecta para todo el que necesite total comunicación, tecnologìa y que además necesite movilsection classad. Solo pesa 2,6 Kgs y tiene una pantalla Wsection classescreen de 15,4" section classeal para Windows Vista. Con su procesador Intel Pentium Dual Core, 2GB of memoria, y pantalla de 15.4" wsection classescreen conectivsection classad wireless connectivity. </p>
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
