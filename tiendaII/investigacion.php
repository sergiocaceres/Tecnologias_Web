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

					<p section class="nombreseccion"> Investigación </p>
					<section class="noticiadestacadainvestigacion">
					<a href="investigaciones/mujeres_pioneras.php">En España, según el último informe de la universidad española, en cifras, sólo hay un 23 % de alumnas estudiando ingenierías y arquitectura </a>
           <img src="investigaciones/mujeres_pioneras/mujeres_pioneras.jpg"/>
           <p> ESET España, empresa pionera en la protección proactiva de malware desde hace más de dos décadas, ha quersection classo 	reconocer la aportación del género femenino al mundo de la informática.</p>
					</section>


					<section class="productos">
             			<section class="fila">
           					<section class="izquierda">
            					<section class="investigaciones"> 
               						<a href="investigaciones/campos_de_investigacion.php">" Nuevos campos de Investigación "</a> 
               						<img src="investigaciones/campos_de_investigacion/campos_de_investigacion.jpg" />
              						<p> Las investigaciónes apuntan a la Domótica, la automatización de procesos de negocios o redes sociales son los nuevos campos de investigación de la ingeniería informática. Sistemas capaces de automatizar una vivienda, aportando servicios de gestión energética, segursection classad, bienestar y comunicación. La automatización de los procesos de negocios y la domótica, son a groso modo las materias que centran las líneas de investigación que desarrolla el Departamento de Lenguajes y Sistemas Informáticos de la Universsection classad de Sevilla.  </p>
           						</section> 

           						<section class="investigaciones"> 
									<a href="investigaciones/ingenieria_informatica.php">" Grado en Ingeniería Informática " </a> 
								    <img src="investigaciones/ingenieria_informatica/ingenieria_informatica.jpg" />
								    <p> Los ingenieros en informática son profesionales preparados para ejercer su activsection classad profesional en el desarrollo y aplicación de las tecnologías de la información y la comunicación (TIC), en el ámbito de la Informática. El título de Graduado/a en Ingeniería Informática tiene un enfoque generalista, preparando al alumno en todos los campos de la informática.  </p>
           						</section> 
        					</section>

				
							<section class="centro">
           						<section class="investigaciones"> 
									<a href="investigaciones/prevencion_cancer.php">" Prevención y detección " </a>
          				 			<img src="investigaciones/prevencion_cancer/prevencion_cancer.jpg" />
          	 						<p>La prevención y la detección representan los dos pilares de nuestras defensas de priorsection classad contra el cáncer. La prevención del cáncer incluye esfuerzos por anticipar el proceso que conduce al cáncer, junto con la detección y el tratamiento de afecciones precancerosas en los estadios más tempranos y tratables, y la prevención de nuevos cánceres o de segundos cánceres primarios en los supervivientes.  </p>
           						</section>

            					<section class="investigaciones"> 
               						<a href="investigaciones/conductas_adictivas.php">" Conductas adictivas en Internet "</a> 
								    <img src="investigaciones/conductas_adictivas/conductas_adictivas.jpg" />
								    <p> El Proyecto de investigación EU NET ADB tiene como objetivo dar a conocer los riesgos de la Conducta Adictiva a Internet entre los adolescentes en Europa. Hace pocos días se dieron a conocer los resultados de dicho estudio. </p>
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
