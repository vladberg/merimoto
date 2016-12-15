<?php
error_reporting(0);
include_once("lib/template.php");
$link=conectarse();
$id_categoria=$_GET['id'];

if($_POST){
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$text = $_POST['mensaje'];

//Librerías para el envío de mail
include_once('lib/PHPMailer/class.phpmailer.php');
include_once('lib/PHPMailer/class.smtp.php');
 
//Recibir todos los parámetros del formulario
//$para = 'ventas@sartory.mx';
$para = 'addy_honda@hotmail.com';
$asunto = $_POST['asunto'];
$mensaje = '<h2>'.$nombre.'</h2><h3>'.$email.'</h3><h3>'.$telefono.'</h3><h3>'.$text.'</h3>';
$archivo = $imagen;
 
//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
//$mail->SMTPAuth = true;
$mail->SMTPSecure = "tsl";
$mail->Host = "localhost";
$mail->Port = 25;
 
//Nuestra cuenta
//$mail->Username ='bergman.pereira.novelo@gmail.com';
//$mail->Password = 'vladberg01'; //Su password
 
//Agregar destinatario
$mail->AddAddress($para);
$mail->Subject = $asunto;
$mail->Body = $mensaje;
//Para adjuntar archivo
$mail->AddAttachment($archivo, $archivo);
$mail->MsgHTML($mensaje);
  
//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");            
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
         </script>';
}
 }

cabezal();
?>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

   
<style type="text/css">
    #get-it {
    background: #ED1C24;
    padding: 50px 0 30px;
    color: #fff;
    text-align: center;
}
.box-simple .icon {
    color: #F39200;
    border-color: #ED1C24;
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
}
.heading h1, .heading h2, .heading h3, .heading h4, .heading h5 {
    display: inline-block;
    border-bottom: solid 5px #ED1C24;
    line-height: 1.1;
    margin-bottom: 0;
    padding-bottom: 10px;
    vertical-align: middle;
    text-transform: uppercase;
    letter-spacing: 0.06em;
}
.btn-template-main:hover, .btn-template-main:focus, .btn-template-main:active, .btn-template-main.active {
    background: #ED1C24;
    color: #ffffff;
    border-color: #ED1C24;
}
.btn-template-main {
    color: #ED1C24;
    background-color: #ffffff;
    border-color: #ED1C24;
}

h2 {
    margin: 8px 0;
    padding: 0px 0;
    font-size: 18px;
    font-weight: normal;
    line-height: 1.2em;
    color: #646364;
    text-transform: none;
    font-family: 'Fjalla One', sans-serif;
}
</style>
     <div id="content">
            <div class="container" id="contact">

                <section>

                    <div class="row">
                    
                        <div class="col-md-12">
                            <section>
                                <div class="heading">
                                    <h2>ESTAMOS AQUÍ PARA AYUDARTE</h2>
                                </div>

                                <p class="lead"></p>
                            </section>
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <h3>Dirección</h3>
                                <p>Calle 86 Av. Itzáes <br/>No. 473-F con 47 <br/>Col. Inalámbrica.<br/>Mérida, Yucatán
                                </p>
                            </div>
                            <!-- /.box-simple -->
                        </div>


                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h3>Call center</h3>
                                <p class="text-muted">Contáctenos en los telefono.</p>
                                <p><strong> (999) 925-3484</strong><br/>
                                </p>
                            </div>
                            <!-- /.box-simple -->

                        </div>

                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h3>Correo Electrónico</h3>
                                <p class="text-muted">Envíenos sus dudas o sugerencias.</p>
                                <ul class="list-style-none">
                                    <li><strong><a href="mailto:">addy_honda@hotmail.com</a></strong>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.box-simple -->
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row text-center">

                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Formulario de contacto</h2>
                            </div>
                        </div>
                        <form action="" method="post">

                        <div class="col-md-8 col-md-offset-2">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nombre</label>
                                            <input type="text" class="form-control" id="firstname" name="nombre">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input name="email" type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Asunto</label>
                                            <input type="text" class="form-control" id="subject" name="asunto">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Telefono</label>
                                            <input type="text" name="telefono" class="form-control" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Mensaje</label>
                                            <textarea id="message" class="form-control" name="mensaje"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Enviar mensaje</button>

                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>



                        </div>
                    </div>
                    <!-- /.row -->

                </section>


            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->

        <div >
<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ses-419!2smx!4v1462206706300!6m8!1m7!1sutB8SyqPZ7S3IKDvmA8GqA!2m2!1d20.97968334976961!2d-89.6398517402053!3f235.24779173145066!4f-10.136908902083732!5f0.4000000000000002" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
<!-- *** GET IT ***
_________________________________________________________ -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    
                </div>
                <div class="col-md-4 col-sm-12">
                    
                </div>
            </div>
        </div>
<?php 
footer();
?>