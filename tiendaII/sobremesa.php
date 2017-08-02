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

					<p section class="nombreseccion"> Sobremesa </p>
					<section section class="noticiadestacadasobremesa">
					<a href="sobremesa/acer_aspire.php">Ordenador sobremesa Acer Aspire </a>
           <img src="sobremesa/acer_aspire/acer_aspire.jpg"/>
           <p> 4Gb RAM DDR3, 500Gb SATA HDD 7200rpm, AMD Radeon R2 series, VGA, HDMI, 2 DisplayPort, DVD±RW (±R DL), Gigabit Ethernet, Lector de tarjetas 4 en 1, Formato SFF, Windows 8.1 64-bit, 6Kg, negro</p>
					</section>


					<section class="productos">
             			<section class="fila">
           					<section class="izquierda">
            					<section class="sobremesa"> 
               						<a href="sobremesa/apple_imac.php">" Ordenador Apple "</a> 
               						<img src="sobremesa/apple_imac/apple_imac.jpg" />
              						<p> Pantalla de 27 pulgadas (en diagonal) retroiluminada por LED con tecnología IPS; resolución de 2560 por 1440 compatible con millones de colores. Procesador de 3,4GHz, 8GB de Ram, 1TB de disco duro. El precio es de 2027€. Bastante útil para gente que exprima al máximo los portátiles, te garantiza segursection classad al 97%, no se te queda bloqueado y es extremadamente fino, tanto que pesa menos de 2kg  </p>
           						</section> 

           						<section class="sobremesa"> 
									<a href="sobremesa/primux_tech.php">" Primux Tech " </a> 
								    <img src="sobremesa/primux_tech/primux_tech.jpg" />
								    <p> Caja Semitorre ATX PRIMUX M95 <> Fuente de 500W - VENTILADOR DE 12 CM <> LED. USB y Audio Frontal. <> 4 Bahias 3,5". 2 Bahias 2,5" <> <> Procesador Intel i7 4770S 3.1 GHz <> Placa Base Gigabyte H87M.HD3 <> Memoria KINGSTON 8GB DDR3 <> Disco Duro 1000 GB SATA 7200 <> Regrabadora DVD SATA <> Lector de tarjetas <> S.O. Freedos <>  </p>
           						</section> 
        					</section>

				
							<section class="centro">
           						<section class="sobremesa"> 
									<a href="sobremesa/toshiba_qosmio.php">" Toshiba qosmio " </a>
          				 			<img src="sobremesa/toshiba_qosmio/toshiba_qosmio.jpg" />
          	 						<p>Windows® 8.1 64 bits, Intel® Core™ i7-4700MQ, Número de núcleos 4, Hilos de proceso	8 Velocsection classad / Frecuencia	2,4 GHz, RAM 8, GB DDR3L 1600 MHz (2 x 4 GB), Slots RAM	2 (0 libres, máx. 16 GB), Disco Duro 3 TB sATA 7200 rpm, Tarjeta Gráfica NVsection classIA® GeForce® 740M con tecnología turbocache  </p>
           						</section>

            					<section class="sobremesa"> 
               						<a href="sobremesa/packard_bell.php">" Packard bell imedia s3840 "</a> 
								    <img src="sobremesa/packard_bell/packard_bell.jpg" />
								    <p> FORMATO CAJA, Semitorre, PROCESADOR	INTEL CORE-I5-2320 MEMORIA RAM	8GB DDR3 DISCO DURO	2000GB SATA TARJETA GRAFICA	ATI AMD 7350 1GB  </p>
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
