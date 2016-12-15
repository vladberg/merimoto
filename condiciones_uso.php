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
    width: 458px;
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
              <table width="430" cellspacing="25" align="center"><tr><td valign="top">
             <center><span class="tit_contenidos">Condiciones de Uso</span></center><br />
Los presentes son los términos y condiciones con los que Usted (El "Usuario") y Merimoto S.A. (En adelante "Merimoto") regulan las "Condiciones de Uso Web ". Ser usuario de la página web de Merimoto implicará que Ud. Reconoce haber leído y aceptado las presentes condiciones y lo que las extiendan la normativa legal aplicable en esta materia.
<br /><br />

<b>1. Objeto del web:</b><br />
La página web de Merimoto (En adelante "El Web") se han realizado con un objetivo Comercial, aunque dispone de muchísima información que se ofrece de forma gratuita y accesible para casi todo el mundo sin necesidad de abonar ninguna importe en el momento del acceso. Es sobre este entorno especialmente, sobre el cual desea Merimoto establecer las presentes condiciones y limitaciones de uso para los "Usuarios", que se extiende y añade en todas las cláusulas complementarias y no contradictorias a las que puedan cubrir otras partes del web con transacciones económicas, y sujeto a Condiciones Generales y / o Particulares.
<br /><br /><br />

<b>2. Derechos de autor y marcas:</b>
La propiedad intelectual e industrial, marcas comerciales, gráficos, imágenes, logotipos, e iconos visibles en el Web de Merimoto son de propiedad exclusiva de Merimoto o de sus Clientes. Todo el contenido y su formato están protegidos por las leyes en vigor nacionales e internacionales.
<br /><br />
El uso interesado de cualquier contenido que se encuentre en el Web de Merimoto queda absolutamente prohibido, a no ser que exista concesión de una licencia por escrito.
<br /><br /><br />

<b>3. Uso enlaces del web:</b><br />
Merimoto no se puede hacer responsable del contenido y las políticas de los sitios Web de terceras organizaciones que el Usuario pueda alcanzar desde enlaces alojados en el Web de Merimoto. Esta hará cuando sea posible el máximo esfuerzo razonable para señalar gráficamente donde se producen este tipo de situaciones, sin estar obligada en ningún momento a ello ni asumiendo responsabilidad por no hacerlo, ya que es total responsabilidad del Usuario conocer la tecnología que está utilizando y su navegador para tomar sus propias decisiones de lo que quiere y no quiere hacer. Merimoto sólo utiliza tecnología bien conocida por el mercado.
<br /><br />
Un ejemplo particular de enlaces a otros sitios Webs de terceras organizaciones es el de los banners publicitarios, que por su técnica de uso habitual y forma de comercialización, necesitan parecer lo más transparente posible al usuario. Merimoto reconoce que puede usar banners de terceros en sus páginas web.
<br /><br />
Dentro del Web de Merimoto, el usuario no está autorizado a utilizar enlaces profundos a ningún tipo de página, comprometiéndose sólo a usar la navegación por enlaces, a no ser que sea autorizado por Merimoto por escrito.
<br /><br /><br />
<b>4. Limitaciones:</b><br />
Merimoto no se hace responsable de los daños y perjuicios que se produzcan por fallos o malas configuraciones del software instalado en el ordenador del Usuario, fallos en la transmisión y defectos del fabricante de software.<br />
Usted es el único responsable de lo que suceda en su propio Equipo, y deberá tomar las medidas de seguridad adecuadas para proteger la información alojada en el mismo, para evitar perdidas o daños causados por descargas desde el Web de Merimoto.
<br /><br /><br />

<b>5. Modificaciones:</b><br />
Merimoto podrá variar las presentes condiciones en cualquier momento, aunque no es intención que sea frecuente, publicando en esta misma página las fechas de las modificaciones y entrando en vigor de forma inmediata.<br /><br />
Si por cambio legislativo o resolución judicial deja de ser aplicable una parte de las presentes condiciones, dichas cláusulas serán anuladas, pero las demás serán perfectamente válidas y permanecerán en vigor.<br /><br />
El hecho de continuar usando nuestro Web implica que Usted acepta estas condiciones y se compromete a aceptar las modificaciones realizadas en las mismas, obligándose a revisar esta página con frecuencia.<br /><br />
En caso de no aceptar estas condiciones, no debe seguir visitando el Web de Merimoto.
<br /><br />

              
              </td></tr></table>
              </div>
             <!--Termina Contenido texto--->
               <img src="img/condiciones.jpg" />
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
  
  
  
  
  <!--! end of #container -->
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