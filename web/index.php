<?php
$dir = "noticias";
$dh  = opendir($dir);
while (false !== ($nombre_archivo = readdir($dh))) {
   $archivos[] = $nombre_archivo;
}
$total_archivos = count($archivos);
$totalnoticias = $total_archivos-4; 
?> 
<?php
$noticia = "noticias/noticia".$totalnoticias.".php"; 
?>
<?php
$dir1 = "ofertas/oferta1";
$dh1  = opendir($dir1);
while (false !== ($nombre_archivo1 = readdir($dh1))) {
   $archivos1[] = $nombre_archivo1;
}
$total_archivos1 = count($archivos1);
$totalofertas1 = $total_archivos1-2; 
?> 
<?php
$min1 = 1; 
$max1 = $totalofertas1; 
$oferta1Number = rand($min1, $max1); 
$oferta1 = "ofertas/oferta1/oferta".$oferta1Number.".php"; 
?>
<?php
$dir2 = "ofertas/oferta2";
$dh2  = opendir($dir2);
while (false !== ($nombre_archivo2 = readdir($dh2))) {
   $archivos2[] = $nombre_archivo2;
}
$total_archivos2 = count($archivos2);
$totalofertas2 = $total_archivos2-2; 
?> 
<?php
$min2 = 1; 
$max2 = $totalofertas2; 
$oferta2Number = rand($min2, $max2); 
$oferta2 = "ofertas/oferta2/oferta".$oferta2Number.".php"; 
?>
<?php
$dir3 = "ofertas/oferta3";
$dh3  = opendir($dir3);
while (false !== ($nombre_archivo3 = readdir($dh3))) {
   $archivos3[] = $nombre_archivo3;
}
$total_archivos3 = count($archivos3);
$totalofertas3 = $total_archivos3-2; 
?> 
<?php
$min3 = 1; 
$max3 = $totalofertas3; 
$oferta3Number = rand($min3, $max3); 
$oferta3 = "ofertas/oferta3/oferta".$oferta3Number.".php"; 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Plantillas flash php html xml diseño de páginas web brcmedia.com</title>

<link rel="shortcut icon" href="favicon.ico">
<link href="css_scripts/02.css" rel="stylesheet" rev="stylesheet" type="text/css">

<meta name="DC.Title" content="Plantillas flash php html xml diseño de páginas web brcmedia.com">
<meta name="DC.Creator" content="Martin Brocos">
<meta name="DC.Language" scheme="RFC1766" content="Spanish">

<meta name="title" content="Plantillas flash php html xml diseño de páginas web brcmedia.com">
<meta name="description" content="Diseño de páginas web y plantillas flash php html xml css">
<meta name="keywords" content="Diseñador web freelance flash plantillas templates gratis descargar php diseño páginas">
<meta name="Author" content="Martin Brocos">
<meta name="Copyright" content="Copyright (c) 2009 by Martin Brocos, All Right Reserved">
<meta name="revisit-after" content="15 days">
<meta name="ROBOTS" content="ALL">

<meta http-equiv="title" content="Plantillas flash php html xml diseño de páginas web brcmedia.com">
<meta http-equiv="keywords" content="plantillas gratis musica fotografos tiendas moda joyas vídeo bodas vino muebles inmobiliarias">
<meta http-equiv="description" content="Plantillas web realizadas en flash, php, html, css. Gestionables con sólo conocimientos a nivel de usuario. Plantillas web en castellano muy económicas. Diseño de páginas web flash html php a medida">
<meta http-equiv="DC.Description" content="Plantillas web realizadas en flash, php, html, css. Gestionables con sólo conocimientos a nivel de usuario. Plantillas web en castellano muy económicas. Diseño de páginas web flash html php a medida">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="css_scripts/brcmediarun.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="../../../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body bgcolor="#AEAD99" text="#999888" onLoad="MM_preloadImages('imagenes/bannerbrcmedia.jpg','imagenes/bannerbrcmedia2.jpg','imagenes/bannerbrcmedia3.jpg','imagenes/bannerbrcmedia4.jpg','imagenes/contacto1.jpg','imagenes/contacto2.jpg','imagenes/fondo.jpg','imagenes/fondotablacentro.jpg','imagenes/laempresa1.jpg','imagenes/laempresa2.jpg','imagenes/productos1.jpg','imagenes/productos2.jpg','imagenes/servicios1.jpg','imagenes/servicios2.jpg')">
<table width="955" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td height="26"><p><img src="imagenes/mapaweb.gif" alt="Mapa de la web brcmedia.com" width="19" height="15" border="0" id="Image1"> <a href="mapaweb.html" class="mbrocos" title="Mapa de la web brcmedia.com">Mapa Web</a> /&nbsp;<a class="mbrocos" href="avisolegal/avisolegal.html" title="Aviso Legal de BRCmedia">Aviso Legal </a>/ <strong>&copy;</strong> mart&iacute;n brocos. Telf: 977 11 09 93 / M&oacute;vil: 636 84 25 10 </p></td>
    <td width="200"><div align="center"><a href="#" title="Versión en castellano"><img src="imagenes/es.jpg" alt="español" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="English version"><img src="imagenes/gb.jpg" alt="english" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en alemán"><img src="imagenes/de.jpg" alt="alemán" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en francés"><img src="imagenes/fr.jpg" alt="francés" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en italiano"><img src="imagenes/it.jpg" alt="italiano" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en portugués"><img src="imagenes/pt.jpg" alt="portugués" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en ruso"><img src="imagenes/ru.jpg" alt="ruso" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en danés"><img src="imagenes/dk.jpg" alt="danés" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en finlandés"><img src="imagenes/fi.jpg" alt="finlandés" width="16" height="11" border="0"></a></div></td>
  </tr>
</table>
<table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><p><img src="imagenes/bannerbrcmedia.jpg" alt="Libros librerías escritores brcmedia" width="955" height="147"></p>
    </td>
  </tr>
</table>
<table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><p><img src="imagenes/bannerbrcmedia2.jpg" alt="Libros librerías escritores brcmedia" width="314" height="52"><a href="laempresa/laempresa.html"><img src="imagenes/laempresa1.jpg" alt="La empresa Brcmedia" name="Image2" width="146" height="52" border="0" id="Image2" onMouseOver="MM_swapImage('Image2','','imagenes/laempresa2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="servicios/servicios.html"><img src="imagenes/servicios1.jpg" alt="Servicios Brcmedia.com" name="Image3" width="146" height="52" border="0" id="Image3" onMouseOver="MM_swapImage('Image3','','imagenes/servicios2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="productos/productos.html"><img src="imagenes/productos1.jpg" alt="Productos Brcmedia" name="Image4" width="146" height="52" border="0" id="Image4" onMouseOver="MM_swapImage('Image4','','imagenes/productos2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="contacto/contacto.html"><img src="imagenes/contacto1.jpg" alt="Contacto Brcmedia" name="Image5" width="148" height="52" border="0" id="Image5" onMouseOver="MM_swapImage('Image5','','imagenes/contacto2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><img src="imagenes/bannerbrcmedia3.jpg" alt="Libros librerías escritores brcmedia" width="55" height="52"></p></td>
  </tr>
</table>
<table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="imagenes/bannerbrcmedia4.jpg" alt="Libros librerías escritores brcmedia" width="955" height="88"></td>
  </tr>
</table>
<table class="tablacentro" width="955" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="18"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>    </td>
    <td><table width="915" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="266" valign="top">&nbsp;<br>
            <table width="260" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><img src="imagenes/titnoticias.jpg" alt="Principales noticias de nuestra empresa brcmedia" width="250" height="30"></td>
              </tr>
            </table>
            <table width="260" border="0" cellpadding="4" cellspacing="0">
            <tr>
              <td><?php include($noticia); ?></td>
            </tr>
          </table>
            <table width="260" border="0" cellpadding="4" cellspacing="0">
              <tr>
                <td><img src="imagenes/flecha.gif" alt="Ver más noticias brcmedia.com" width="22" height="13"><a href="noticias/noticias.html" class="brcenlaces" title="Ver más noticias">Ver más noticias...</a></td>
              </tr>
            </table>
            <p>&nbsp;</p>
          <table width="260" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><img src="imagenes/titlocalizacion.jpg" alt="Mapa de localización google maps brcmedia.com" width="250" height="30"></td>
            </tr>
          </table>
          <table width="260" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="20"><p><img src="imagenes/iconotelefono.gif" alt="Teléfono de contacto brcmedia.com" width="17" height="20"><br>
              </p></td>
              <td><font color="#FFFFFF">Teléfono:</font><font color="#FFFFFF"> 636 84 25 10</font></td>
            </tr>
            <tr>
              <td><img src="imagenes/iconomail.gif" alt="Correo electrónico de contacto brcmedia.com" width="17" height="20"></td>
              <td><font color="#FFFFFF">Email:</font> <a href="mailto:contacto@brcmedia.com" class="brcenlaces" title="Correo electrónico de contacto">contacto@brcmedia.com</a></td>
            </tr>
          </table>
          <table width="260" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><a href="localizacion/localizacion.html"><img src="imagenes/mapa.jpg" alt="Mapa de localización google maps brcmedia.com" width="260" height="62" border="0"></a></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <table width="260" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><img src="imagenes/titenlaces.jpg" alt="Enlaces patrocinados brcmedia.com" width="250" height="30"></td>
            </tr>
          </table>
          <table width="260" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><p><strong><font color="#FFFFFF">Enlaces patrocinados</font></strong><font color="#FFFFFF">:</font> <br>
                <a href="http://www.brcmedia.com" class="brcenlaces" title="plantillas flash php html xml css diseño web brcmedia.com">Plantillas flash php html xml css brcmedia.com,</a> <a href="http://www.brocosshirt.com" title="camisetas divertidas, diferentes, diseño de camisetas, camisetas originales y exclusivas" target="_blank" class="brcenlaces">Diseño de camisetas BrocosShirt.com</a><a href="http://www.martinbrocos.com" title="Martín Brocos. Fotografía, pintura, cuadros, láminas, camisetas, diseño" target="_blank" class="brcenlaces">,
              Láminas decorativas, pintura, fotografía MartínBrocos.com</a></p>
                <p>&nbsp;</p></td>
            </tr>
          </table>          </td>
          <td width="649" align="center" valign="top"><table width="615" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td>&nbsp;<br>
                <img src="imagenes/titofertas.jpg" alt="Ofertas brcmedia.com" width="599" height="30"><br>
                  &nbsp;<br>
                  Texto de la sección aquí texto de la sección aquiTexto de la sección aquí texto de la sección aqui texto Texto de la sección aquí.Texto aquí.Texto de la sección aquí texto de la sección aqui texto Texto de la sección aquí.Texto aquí. texto Texto de la sección aquí.Texto aquí. <br>
                &nbsp;<br>
                <table width="614" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="200" valign="top"><?php include($oferta1); ?></td>
                    <td width="7" valign="top">&nbsp;</td>
                    <td width="200" valign="top"><?php include($oferta2); ?></td>
                    <td width="7" valign="top">&nbsp;</td>
                    <td width="200" valign="top"><?php include($oferta3); ?></td>
                  </tr>
                </table>
                <p><img src="imagenes/titvideos.jpg" alt="Vídeos demostrativos publicitarios brcmedia.com" width="599" height="30"></p>
                <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="310" valign="top"><p>
                      <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','300','height','250','title','Vídeos portada','src','videos/videoportada/brcmedia','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','menu','false','movie','videos/videoportada/brcmedia' ); //end AC code
                    </script>
                      <noscript>
                        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="300" height="250" title="Vídeos portada">
                        <param name="movie" value="videos/videoportada/brcmedia.swf">
                        <param name="quality" value="high">
                        <param name="menu" value="false">
                        <embed src="videos/videoportada/brcmedia.swf" width="300" height="250" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" menu="false"></embed>
                      </object>
                        </noscript>
                    </p>
                      </td>
                    <td width="290" valign="top"><p><strong>Galería de vídeos Brcmedia.com</strong><br>
                      <br>
                      Texto con información de la sección. Texto con información de la sección. </p>
                      <p>Texto con información de la sección. Texto con información de la sección. Texto con información de la sección. Texto con información de la sección. Texto con información de la sección. Texto con información de la sección. </p>
                      <p>Texto con información de la sección. Texto con información de la sección. </p>
                      <p><img src="imagenes/flecha.gif" alt="Ver galería de vídeos brcmedia.com" width="22" height="13"><a href="videos/videos.html" class="brcmedia" title="Ver todos los vídeos">Ver galería de vídeos...</a></p></td>
                  </tr>
                </table>
                <p>&nbsp;</p>
                <p><br>
                </p>
                <p>&nbsp;</p>
                <p align="right"><img src="imagenes/separacion.jpg" alt="Tiendas de libros librerías literatura escritores brcmedia.com" width="620" height="18"><br>
                  <a href="htt://www.brcmedia.com"><img src="imagenes/logopeqinf.jpg" alt="Diseño de páginas web Brcmedia.com" width="104" height="39" border="0"></a></p>
                <p align="right">&nbsp;</p></td>
            </tr>
          </table></td>
        </tr>
      </table>
      </td>
    <td width="22"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>