<?php session_start(); ?>
<!DOCTYPE html> 
	<head runat="server"> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<title>Tienda de Informática</title>
		<link href="estilos.css" rel="stylesheet" /> 
		<link rel= "shortcut icon" href = "images/inicio.jpg" >
	</head>
	
	<body>
		<section class = "contenedor">
			<section class = "publizquierda"> </section>
			<section class = "publiderecha"> </section>
			<section class = "central">
				<section class = "publicentral"> </section>
				<section class = "contenedorCentral">
					<section class = "nomtienda" background="white">
						<h1 align = "center"><a class = "rojo" href = "index.php"> Tienda de Sergio </a></h1>
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
					</section> 

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

					<section class="productos">
             			<section class="fila">
           					<section class="izquierda">
            					<section class="sobremesa"> 
               						<a href="sobremesa/acer_aspire.php">" Acer Aspire "</a> 
               						<img src="sobremesa/acer_aspire/acer_aspire.jpg" />
              						<p> 4Gb RAM DDR3, 500Gb SATA HDD 7200rpm, AMD Radeon R2 series, VGA, HDMI, 2 DisplayPort, DVD±RW (±R DL), Gigabit Ethernet, Lector de tarjetas 4 en 1, Formato SFF, Windows 8.1 64-bit, 6Kg, negro </p>
           						</section> 

           						<section class="portatiles"> 
									<a href="portatiles/portatiles_hp_630.php">" HP 630 i3 " </a> 
								    <img src="portatiles/portatiles_hp_630/portatiles_hp_630.jpg" />
								    <p> Portátil a un precio asequible. Cuenta con un monitor de 15,6 pulgadas, procesador intel i3. </p>
           						</section> 

							    <section class="perifericos"> 
									<a href="perifericos/disco_duro.php">" Disco duro "</a> 
								    <img src="perifericos/disco_duro/discoduro.jpg" />
								    <p> 2 TeraBytes de almacenamiento</p>
							    </section>

								<section class="investigaciones"> 
               						<a href="investigaciones/mujeres_pioneras.php">Mujeres pioneras en las tecnologias </a> 
               						<img src="investigaciones/mujeres_pioneras/mujeres_pioneras.jpg" />
               						<p> En España, según el último informe de la universidad española, en cifras, sólo hay un 23 % de alumnas estudiando ingenierías y arquitectura</p>
           						</section>
        					</section>

				
							<section class="centro">
           						<section class="perifericos"> <a href="perifericos/usb.php">" Oferta en Pen drives " </a>
           							<img src="perifericos/usb/usb.jpg" />
           							<p> Usb 3.0 con capacidades desde 8GB hasta 32GB. Muy baratos, no los dejes escapar</p>
           						</section>

           						<section class="sobremesa"> <a href="sobremesa/hp_pavilion.php">" Ordenador HP Pavilion " </a>
          				 			<img src="sobremesa/hp_pavilion/hp_pavilion.jpg" />
          	 						<p> Ordenador de sobremesa de 500 GB de capacidad y con procesador acelerado AMD Quad-Core A8-6500 con gráficos Radeon HD 8570D, alcanzando una velocidad de 3,5 GHz.</p>
           						</section>

            					<section class="portatiles"> 
               						<a href="portatiles/portatiles_macbook.php">" Macbook Pro "</a> 
								    <img src="portatiles/portatiles_macbook/portatiles_macbook.jpg" />
								    <p> Procesador Intel Core i5 de doble núcleo a 1,6 GHz. Turbo Boost hasta 2,7 GHz. Intel HD 										Graphics 6000. 4 GB de memoria. 256 GB de almacenamiento flash  </p>
           						</section> 
        					</section> 

							<section class="derecha">
        						<h1 align = "center"> Ultimas noticias </h1></br>
            					<section class="ultimasnoticias"> 
            						<ul>
										<li><a href="https://www.apple.com/es/watch/" target ="_blank">Apple saca el iWatch que 										revolucionará el mercado de los relojes</a></li>
										<li><a href="https://www.apple.com/es/iphone-6/" target ="_blank"> Apple lanza al mercado 											el iPhone 6, el	más grande hasta ahora de la marca</a></li>
										<li><a href ="http://www.samsung.com/es/consumer/mobile-phone/smartphones/galaxy/SM-G920FZDAPHE" target ="_blank">Samsung contraataca a iPhone y sigue su ritmo respecto a los móviles, aqui el Samsung Galaxy s6 </a></li>
										<li><a href="http://www.somoslibres.org/modules.php?name=News&file=article&sid=1691">¿Por 											qué Linux es mas seguro que Windows?</a></li>
		            				</ul>
            					</section>
								</br>
            					<h1 align ="center"> Publicidad </h1></br>
								<h1 align = "center"><img name = "slide" alt= "imagen cambiante" src = "images/publi1.jpg">
            					<h1 align ="center"><img src="images/publicidad.jpg" /></h1>
								<img src="images/publicidad2.jpg" />
								</br>
								<h1 align ="center"> Noticias deportivas </h1></br>
								<section class="ultimasnoticiasdeportivas">
									<ul>
										<li><a href="http://www.20minutos.es/deportes/noticia/real-madrid-ficha-lateral-derecho-danilo-brasileno-oporto-2421196/0/" target ="_blank">El Real Madrid ficha a Danilo por 31.5M, procedente del Oporto</a></li>
										<li><a href="http://udalmeria.ideal.es/noticias/201504/01/fran-velez-deja-cuadro-20150401005323-v.html" target ="_blank">El central del Almeria, Fran Vélez, deberá pasar por quirófano y se pierde toda la temporada </a></li>
									</ul>
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
