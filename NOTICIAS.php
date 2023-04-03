<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STEAM</title>
<style type="text/css">
<!--
body {
	background-color: #4E5869;
	margin: 0;
	padding: 0;
	color: #FFF;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 90%;
	line-height: 1.4;
	background-image: none;
}

/* ~~ Selectores de elemento/etiqueta ~~ */
ul, ol, dl { /* Debido a las diferencias existentes entre los navegadores, es recomendable no añadir relleno ni márgenes en las listas. Para lograr coherencia, puede especificar las cantidades deseadas aquí o en los elementos de lista (LI, DT, DD) que contienen. Recuerde que lo que haga aquí se aplicará en cascada en la lista .nav, a no ser que escriba un selector más específico. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* la eliminación del margen superior resuelve un problema que origina que los márgenes escapen de la etiqueta div contenedora. El margen inferior restante lo mantendrá separado de los elementos de que le sigan. */
	padding-right: 15px;
	padding-left: 15px; /* la adición de relleno a los lados del elemento dentro de las divs, en lugar de en las divs propiamente dichas, elimina todas las matemáticas de modelo de cuadro. Una div anidada con relleno lateral también puede usarse como método alternativo. */
}
a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */
	border: none;
}

/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */
a:link {
	color:#414958;
	text-decoration: underline; /* a no ser que aplique estilos a los vínculos para que tengan un aspecto muy exclusivo, es recomendable proporcionar subrayados para facilitar una identificación visual rápida */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* este grupo de selectores proporcionará a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un ratón. */
	text-decoration: none;
}

/* ~~ este contenedor rodea a todas las demás divs, lo que les asigna su anchura basada en porcentaje ~~ */
.container {
	width: 80%;
	max-width: 1260px;/* puede que sea conveniente una anchura máxima (max-width) para evitar que este diseño sea demasiado ancho en un monitor grande. Esto mantiene una longitud de línea más legible. IE6 no respeta esta declaración. */
	min-width: 780px;/* puede que sea conveniente una anchura mínima (min-width) para evitar que este diseño sea demasiado estrecho. Esto permite que la longitud de línea sea más legible en las columnas laterales. IE6 no respeta esta declaración. */
	background-color: #FFF;
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño. No es necesario si establece la anchura de .container en el 100%. */
}

/* ~~ no se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. Contiene un marcador de posición de imagen que debe sustituirse por su propio logotipo vinculado ~~ */
.header {
	background-color: #6F7D94;
}

/* ~~ Estas son las columnas para el diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de las divs. Los elementos situados dentro de estas divs tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral a la div propiamente dicha, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado.

2) No se asigna margen a las columnas, ya que todas ellas son flotantes. Si es preciso añadir un margen, evite colocarlo en el lado hacia el que se produce la flotación (por ejemplo: un margen derecho en una div configurada para flotar hacia la derecha). En muchas ocasiones, puede usarse relleno como alternativa. En el caso de divs para las que deba incumplirse esta regla, deberá añadir una declaración "display:inline" a la regla de la div para evitar un error que provoca que algunas versiones de Internet Explorer dupliquen el margen.

3) Dado que las clases se pueden usar varias veces en un documento (y que también se pueden aplicar varias clases a un elemento), se ha asignado a las columnas nombres de clases en lugar de ID. Por ejemplo, dos divs de barra lateral podrían apilarse si fuera necesario. Si lo prefiere, éstas pueden cambiarse a ID fácilmente, siempre y cuando las utilice una sola vez por documento.

4) Si prefiere que la navegación esté a la derecha en lugar de a la izquierda, simplemente haga que estas columnas floten en dirección opuesta (todas a la derecha en lugar de todas a la izquierda) y éstas se representarán en orden inverso. No es necesario mover las divs por el código fuente HTML.

*/
.sidebar1 {
	float: left;
	width: 20%;
	background-color: #93A5C4;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 80%;
	float: left;
	background-image: url(images.jfif);
}

/* ~~ Este selector agrupado da espacio a las listas del área de .content ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* este relleno reproduce en espejo el relleno derecho de la regla de encabezados y de párrafo incluida más arriba. El relleno se ha colocado en la parte inferior para que el espacio existente entre otros elementos de la lista y a la izquierda cree la sangría. Estos pueden ajustarse como se desee. */
}

/* ~~ Los estilos de lista de navegación (pueden eliminarse si opta por usar un menú desplegable predefinido como el de Spry) ~~ */
ul.nav {
	list-style: none; /* esto elimina el marcador de lista */
	border-top: 1px solid #666; /* esto crea el borde superior de los vínculos (los demás se sitúan usando un borde inferior en el LI) */
	margin-bottom: 15px; /* esto crea el espacio entre la navegación en el contenido situado debajo */
}
ul.nav li {
	border-bottom: 1px solid #666; /* esto crea la separación de los botones */
}
ul.nav a, ul.nav a:visited { /* al agrupar estos selectores, se asegurará de que los vínculos mantengan el aspecto de botón incluso después de haber sido visitados */
	padding: 5px 5px 5px 15px;
	display: block; /* esto asigna propiedades de bloque al vínculo, lo que provoca que llene todo el LI que lo contiene. Esto provoca que toda el área reaccione a un clic de ratón. */
	text-decoration: none;
	background-color: #8090AB;
	color: #000;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con ratón como para los que lo hagan con teclado */
	background-color: #6F7D94;
	color: #FFF;
}

/* ~~ El pie de página ~~ */
.footer {
	padding: 10px 0;
	background-color: #6F7D94;
	position: relative;/* esto da a IE6 hasLayout para borrar correctamente */
	clear: both; /* esta propiedad de borrado fuerza a .container a conocer dónde terminan las columnas y a contenerlas */
}

/* ~~ clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en una <br /> o div vacía como elemento final tras la última div flotante (dentro de #container) si #footer se elimina o se saca fuera de #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
#apDiv1 {
	position: absolute;
	width: 256px;
	height: 236px;
	z-index: 1;
	left: 1146px;
	top: 149px;
}
body,td,th {
	font-size: 90%;
}
#apDiv2 {
	position: absolute;
	width: 255px;
	height: 115px;
	z-index: 2;
	left: 1142px;
	top: 404px;
}
#apDiv3 {
	position: absolute;
	width: 245px;
	height: 137px;
	z-index: 3;
	left: 1145px;
	top: 652px;
}
#apDiv4 {
	position: absolute;
	width: 200px;
	height: 179px;
	z-index: 4;
	left: 1154px;
	top: 991px;
}
#apDiv5 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 5;
	left: 1160px;
	top: 1244px;
}
-->
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* este margen negativo de 1 px puede situarse en cualquiera de las columnas de este diseño con el mismo efecto corrector. */
ul.nav a { zoom: 1; }  /* la propiedad de zoom da a IE el desencadenante hasLayout que necesita para corregir el espacio en blanco extra existente entre los vínculos */
</style>
<![endif]-->
</head>

<body bgcolor="#000000">

<div class="container">
  <div class="header"><!-- end .header -->
    <div id="apDiv1"><img src="descarga.jfif" width="253" height="234" /></div>
  <img src="descarga (1).png" width="1260" height="110" align="center" /></div>
  <div id="apDiv4"><img src="images (2).jfif" width="244" height="180" /></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="Templates/plantilla.dwt.php">INICIO</a></li>
      <li><a href="#">NOTICIAS</a></li>
      <li><a href="AA.php">MISION Y VISION</a></li>
      <li><a href="CONTACTANOS.php">CONTACTANOS</a></li>
      <li><a href="datos.php">QUE TE PARECIO</a></li>
    </ul>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div id="apDiv2"><img src="descarga (1).jfif" width="251" height="191" /></div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><!-- end .sidebar1 --></p>
  </div>
  <div class="content">
<h2 align="center"><strong>HOY ----------------------------------------------------------------------</strong>-</h2>
<div></div>
    <div>
      <div>
        <div>
          <div>NOTICIAS
: OPREP - S.O.G. Prairie Fire
  <div>
              <div>
                <div>PUBLICADO EL sáb, 18 de marzo</div>
                <div></div>
              </div>
            </div>
          </div>
        </div>
        <div></div>
      </div>
    </div>
    <div>
      <div>
        <div>UNIT: Savage Game Design</div>
        <div>TO:Arma 3 Users</div>
        <div class="content">
          <div>OPSUM:</div>
         Prairie Fire Team helps with Special Forces veteran's Medal of Honor</div>
      </div>
    </div>
    <strong><br />
    </strong>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <div>
      <div>
        <div>
          <div>
            <div>
              <div>
                <div>NOTICIAS : ARK </div>
                <div>PUBLICADO EL vie, 17 de marzo</div>
              </div>
            </div>
          </div>
        </div>
        <div></div>
      </div>
    </div>
    <div>
    UNIT: Araneomorphus: Last Remnant of an Ancient Power<br />
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <div>
      <div>
        <div>
          <div>
            <div>
              <div>
                <div>NOTICIAS : Grand Theft Auto V</div>
                <div>PUBLICADO EL mié, 29 de marzo</div>
              </div>
            </div>
          </div>
        </div>
        <div></div>
      </div>
    UNIT: Ayuda a los Fooligans a desentrañar una conspiración psicodélica</div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h2>AYER -------------------------------------------------------------------</h2>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div>
      <div>
        <div>
          <div>
            <div>
              <div>NOTICIAS :Modern Warfare® II Five-Day Free Access</div>
              <div>PUBLICADO EL lun, 20 de marzo</div>
            </div>
          </div>
        </div>
      </div>
      <div></div>
    UNIT:Battle amongst the wintry peaks surrounding the Himmelmatt Expo </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div>
      <div>
        <div>
          <div>
            <div>
              <div>NOTICIAS : Forza Horizon 5</div>
              <div>PUBLICADO EL jue, 23 de marzo</div>
            </div>
          </div>
        </div>
      </div>
      <div></div>
      UNIT: Welcome to the penultimate week of the Horizon Wilds Takeover
      <div id="apDiv5"><img src="images (3).jfif" width="236" height="270" /></div>
    </div>
    <p></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div id="apDiv3"><img src="images (1).jfif" width="257" height="219" /></div>
    <p align="center">&nbsp;</p>
  <!-- end .content --></div>
  <div class="footer">
    <p align="center"><a href="http://www.valvesoftware.com/about" target="_blank" rel=""><br />
    Acerca de Valve</a>   |  <a href="http://www.valvesoftware.com/" target="_blank" rel="">Empleo</a>   |  <a href="http://www.steampowered.com/steamworks/" target="_blank" rel="">Steamworks</a>   |  <a href="https://partner.steamgames.com/steamdirect" target="_blank" rel="">Distribución de Steam</a>   |  <a href="https://help.steampowered.com/es/?snr=1_44_44_">Soporte</a>   |  <a href="https://store.steampowered.com/digitalgiftcards/?snr=1_44_44_" target="_blank" rel="">Tarjetas regalo</a>   |  <a href="https://steamcommunity.com/linkfilter/?url=http://www.facebook.com/Steam" target="_blank" rel=" noopener"> Steam</a>   |  <a href="http://twitter.com/steam" target="_blank" rel=""> @steam</a></p>
  <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>
