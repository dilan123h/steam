<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>STEAM</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
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
	background-image: url(../images.jfif);
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
-->
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* este margen negativo de 1 px puede situarse en cualquiera de las columnas de este diseño con el mismo efecto corrector. */
ul.nav a { zoom: 1; }  /* la propiedad de zoom da a IE el desencadenante hasLayout que necesita para corregir el espacio en blanco extra existente entre los vínculos */
</style>
<![endif]--></head>

<body bgcolor="#000000">

<div class="container">
  <div class="header"><!-- end .header --><img src="../descarga (1).png" width="1263" height="110" align="center" /></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="plantilla.dwt.php">INICIO</a></li>
      <li><a href="../NOTICIAS.php">NOTICIAS</a></li>
      <li><a href="../AA.php">MISION Y VISION</a></li>
      <li><a href="../CONTACTANOS.php">CONTACTANOS</a></li>
      <li><a href="../datos.php">QUE TE PARECIO</a></li>
    </ul>
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
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><!-- end .sidebar1 --></p>
  </div>
  <div class="content"><!-- TemplateBeginEditable name="EditRegion3" -->
    <h2 align="center"><strong>Accede a los juegos al instante</strong></h2>
    <div>
      <div align="center">
        <p><strong>Con casi 30 000 juegos publicados; desde grandes compañías hasta estudios independientes pasando por todo lo intermedio. Disfruta de ofertas exclusivas, actualizaciones automáticas y otras grandes ventajas.        </strong></p>
        <h2 align="center"><strong>Únete a la comunidad</strong></h2>
        <div> <strong>¡Conoce nuevas personas, únete a grupos, forma clanes, chatea mientras juegas y mucho más! Con más de 100 millones de posibles amigos (o enemigos), la diversión nunca termina.        </strong></div>
        <h2 align="center"><strong>Lanza tu juego</strong></h2>
        <div> <strong>Steamworks es un conjunto de herramientas y servicios que ayuda a desarrolladores y editores a sacar el máximo partido a la distribución de juegos en Steam.        </strong></div>
        <p>&nbsp;</p>
      </div>
    </div>
    <h1 align="center" id="about_steam_feature_title"><strong>Características</strong></h1>
    <div id="about_steam_feature_subtitle">
      <p><strong>Trabajamos continuamente para traer nuevas actualizaciones y características a Steam, tales como:</strong></p>
    </div>
    <div>
      <div></div>
      <div align="center">
        <h2><strong>CHAT DE STEAM</strong></h2>
      </div>
    </div>
    <div>
      <div align="center"><strong>NUEVAS CARACTERÍSTICAS PARA LA LISTA DE AMIGOS, EL CHAT Y EL CHAT DE VOZ</strong></div>
    </div>
    <div align="center">
      <blockquote><strong>UNA EXPERIENCIA DE CHAT MÁS ENRIQUECEDORA<br />
        MEJOR ORGANIZACIÓN DE LA LISTA DE AMIGOS<br />
        QUE HACE MÁS FÁCIL Y DIVERTIDO JUGAR CON AMIGOS</strong></blockquote>
    </div>
    <div>
      <div align="center">
        <h2><strong>Steam Mobile</strong></h2>
      </div>
    </div>
    <div>
      <p><strong>Compra juegos, protege tu cuenta y entérate de las últimas noticias sobre tus juegos y la comunidad.</strong></p>
    </div>
    <div></div>
    <strong><br />
    </strong>
    <div></div>
<div></div>
    <h3 align="center"><strong>Compatibilidad con mandos</strong></h3>
    <div>
      <p align="center"><strong>Steam alienta a los desarrolladores a que incluyan soporte para mandos en sus juegos, incluidos los mandos de PlayStation, Xbox y Nintendo.</strong></p>
    </div>
    <strong><br />
    </strong>
    <p align="center">&nbsp;</p>
  <!-- TemplateEndEditable -->
  <!-- end .content --></div>
  <div class="footer">
    <p align="center"><a href="http://www.valvesoftware.com/about" target="_blank" rel="">Acerca de Valve</a>   |  <a href="http://www.valvesoftware.com/" target="_blank" rel="">Empleo</a>   |  <a href="http://www.steampowered.com/steamworks/" target="_blank" rel="">Steamworks</a>   |  <a href="https://partner.steamgames.com/steamdirect" target="_blank" rel="">Distribución de Steam</a>   |  <a href="https://help.steampowered.com/es/?snr=1_44_44_">Soporte</a>   |  <a href="https://store.steampowered.com/digitalgiftcards/?snr=1_44_44_" target="_blank" rel="">Tarjetas regalo</a>   |  <a href="https://steamcommunity.com/linkfilter/?url=http://www.facebook.com/Steam" target="_blank" rel=" noopener"> Steam</a>   |  <a href="http://twitter.com/steam" target="_blank" rel=""> @steam</a></p>
  <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>
