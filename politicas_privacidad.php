<?php
session_start();
include_once ("lib/template.php"); 
$link=conectarse();

if(isset($_SESSION['servicios_user'])){
$usuario=$_SESSION['servicios_user'];
$log='<a href="#" onclick="document.frmlogout.submit();" style="color:#FE0000"><i class="fa fa-power-off"></i> Cerrar Sesión</a>';
}
else{
$usuario='<a href="user.login.php" style="color:#69AE1D">
                <i class="fa fa-user"> INICIAR SESION </i>
          </a>';
$log='<a href="registro.php" style="color:#69AE1D">
              <i class="fa fa-user"> REGISTRO </i>
          </a>';
}
?>
<!DOCTYPE html>
<html equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Merimoto</title>
  
  <meta charset="utf-8">


  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/superfish.css" type="text/css">
  <link rel="stylesheet" href="css/template.css" type="text/css">
  <link rel="stylesheet" href="css/custom.css" type="text/css">
  <link href="css/style5.css" rel="stylesheet" type="text/css" />
  <!-- UNCOMMENT BELOW IF YOU WANT RESPONSIVE LAYOUT FOR TABLET with device width -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link rel="stylesheet" href="css/responsive-tablet.css" type="text/css" />-->
  
  <!-- Delete only if you're planning to use responsive for table with meta viewport device-width=1  -->
  <link rel="stylesheet" href="css/responsive.css" type="text/css">
  
  
  
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->

  <script src="js/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js">\x3C/script>')</script>
  <script src="js/jquery.noconflict.js" type="text/javascript"></script>
  <script src="js/modernizr.min.js" type="text/javascript"></script>
  <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <style type="text/css">
.iosSlider {
    width: 100%;
    background: url(loader_dark.gif) no-repeat center center;
    height: 370px !important; }
    #ber { 
  font: 100% sans-serif !important; 
}
#contenidos {
       height: 460px;
    overflow: auto;
    font-family: sans-serif;
    font-weight: normal;
    font-size: 15px;
    color: #000;
    position: absolute;
    top: 175px;
    right: 120px;
    width: 471px;
    background: rgba(255, 255, 255, 0.7);
    text-align: justify;
}


    </style>
  
  <link rel="stylesheet" href="css/style.css" type="text/css">
  


</head>

<body class="">


  <div id="page_wrapper">
    
    <link href="./index_files/css(2)" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/site2.css" type="text/css">
<style>
.t-title.light {
    color: #FFFFFF;
    font-size: 28px;
    margin: 15px 0 0;
    FONT-WEIGHT: 200;
    TEXT-ALIGN: CENTER;
}
.content-about-us {
    background-color: #ED1C24;
    color: #FFFFFF;
    padding-bottom: 10px;
}
</style>
<header id="header" class="style2">
  <div class="top-header">
    <div class="container">
      <!--<ul>
        <li>
            <?php echo $usuario;?>
        </li>
        <li>
          |
        </li>
        <li>
          <?php echo $log;?>
        </li>
      </ul>-->
    </div>
  </div>
  <div class="mid-header">
    <div class="container">
      <div class="row-fluid">
        <div class="span3">
          <h1 class="main-logo">
            <a href="index.php">
              <img src="img/logo_merimoto.png" alt="Merimoto">
              
            </a>
          </h1>
        </div>
        <div class="span9">
          <ul class="top-menu">
                    <li class="with-margin"><a href="somos.php"><h2>Quienes somos</h2></a></li>
                    <li class="with-margin"> | </li>
            <li class="with-margin"><a href="sucursal.php"><h2>Sucursales</h2></a></li>
            <li class="with-margin"> | </li>
            <!--<li>
              <div class="search-content">
                <form action="busqueda.php" method="post">
                  <input name="buscar" maxlength="50" type="text" size="20" placeholder="¿Qué estás buscando?" >
                  <button type="submit" title="Buscar">
                    <img src="img/lupa-busqueda.png" alt="Buscar">
                  </button>
                </form>
              </div>
            </li>-->
            <li class="with-margin">
              <a href="contacto.php">
                <ul class="inline">
                  <li>
                    <img src="img/ico-contacto.png" alt="Contacto">
                  </li>
                  <li>
                    Contáctanos
                    <small>Estamos para ayudarte</small>
                  </li>
                </ul>
                
                
              </a>
            </li>
            
            
            
          </ul>
        </div>
      </div>
      </div>
</header> 
      

   <div class="container">
     
    <div id="main" class="row">
    
    	<div class="onecol"></div> 
    	   
			<div id="slider" class="tencol">

				<div class="flex-container">
					<div class="flexslider">
                    	<ul class="slides">
                    <li>
                   <div id="contenidos">
              <table width="430"  cellspacing="25" align="center"><tr><td valign="top">
             <center><span class="tit_contenidos">Aviso de Privacidad</span></center><br />
A todos nuestros Clientes:
<br />
MERIMOTO S.A. DE C.V., con domicilio en [señalar
calle, número, colonia, ciudad, municipio o delegación y entidad federativa], es responsable de
recabar sus datos personales, del uso que se le dé a los mismos y de su protección.<br /><br />
Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales: <br />
Nombre,email, considerado como sensible según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.<br /><br />
Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestro departamento de datos personales en [datos de contacto, domicilio, teléfono, coreo electrónico] o visitar nuestra página de Internet [http://www.santiagoalonso.com/merimoto].<br /><br />

Merimoto utiliza los datos personales de sus clientes exclusivamente para los fines señalados en el presente Aviso de Privacidad y los conserva por el tiempo que las disposiciones legales señalan.<br /><br />

Merimoto únicamente comparte y/o transfiere los datos personales de sus clientes con terceros, cuando usted contrata otro producto y/o servicio a través de MG Computación, con nuestros proveedores de servicios, en caso de que alguna disposición legal así lo señale, y en los supuestos señalados en el artículo 37 de la Ley. Fuera de los casos enunciados, usted tiene la confianza de que sus datos no serán transferidos a terceras personas sin su expreso consentimiento. <br /><br />
Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través de [teléfono, dirección, correo electrónico].<br /><br />
Cualquier modificación a este aviso de privacidad podrá consultarla a través de nuestro sitio de internet www.santiagoalonso.com/merimoto/.<br /><br />
Fecha última actualización [20/02/15]
              
              </td></tr></table>
              </div>
             <!--Termina Contenido texto--->
               <img src="img/merimoto-aviso-privacidad.jpg" />
               </li> 
                    
                    
                    </li>
                            
                            
						</ul><!-- .slides -->
					</div><!-- .flexslider -->
				</div><!-- .flex-container -->

			</div>
    	
    	<div class="onecol last"></div>



    </div>
   
  </div> <!--! end of #container -->
<!--  <div class="content"></div>-->
   <!--Termina Espacio para poner algún contenido-->
  
  
  
  
 <div class="content-about-us">
      <div class="container">
        <div class="row-fluid">
          <div class="span12">
            <h1 class="t-title light text-left">Matriz Mérida</h1>
            
            
            <p style="text-align: center">
              <span class="textos">Calle 86 Av. Itzáes No. 473-F con 47 Col. Inalámbrica Mérida, Yucatán&nbsp;&nbsp;Teléfono: (999) 925-3484,           <!--E-mail: <a href="#" class="link">info@merimoto.com.mx</a>--> </span><br />
       
       <a href="politicas_privacidad.php" class="link_ad2"><span style="color:#FFF">Aviso de Privacidad</span></a> &nbsp;&nbsp;<span style="color:#FFF">|</span> &nbsp;&nbsp;<a href="condiciones_uso.php" class="link_ad2"><span style="color:#FFF">Condiciones de Uso</span></a>
            </p>
                </div>
        </div>
      </div>
    </div>
<?php
footer();
?>