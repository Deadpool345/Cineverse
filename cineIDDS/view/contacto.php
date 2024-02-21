<?php

require('conexion.php');

$query="SELECT * from proxestrenos";
$resultado=$mysqli->query($query);



$count=0;

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cine IDDS</title>


<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


</head>
<body>
<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"  ><h1><img width="150" height="100" src="imag/logo.png"/></h1></div>
        <div class="col_4 right">
        	<a href="https://www.facebook.com/templatemo"><img src="images/templatemo_facebook.png" alt="Facebook" /></a>
            <a href="#"><img src="images/templatemo_google.png" alt="Google" /></a>
            <a href="#"><img src="images/templatemo_skype.png" alt="Skype" /></a>
            <a href="#"><img src="images/templatemo_twitter.png" alt="Twitter" /></a><br><br>
         
             
        </div>
    </div>
    <div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" >Inicio</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <li><a href="proxim.php">Prox. Estrenos</a></li>
            <li><a href="Snacks.php">Snacks</a></li>
           
            <li><a href="contact.php"class="selected">Contacto</a></li>
        </ul>
        
        
    </div>
  <div id="templatemo_main">
        
        <h1>Contacto</h1>
        <div id="contact_form" class="col_2 right">
            <h3>Mensaje</h3>
            <form method="post" name="contact" action="#">
                <div class="col_4 left">
                    <label for="fullname">Nombre:</label>
                    <input name="fullname" type="text" class="required input_field" id="fullname" maxlength="40" />
                </div>
                <div class="col_4 right">
                  <label for="email">Email:</label>
                    <input name="email" type="text" class="validate-email required input_field" id="email" maxlength="40" />
                </div>
                <div class="clear h10"></div>
              <div class="col_4 left">
                <label for="phone">iPhone:</label>
                  <input name="author" type="text" class="required input_field" id="author" maxlength="20" />
                </div>
  <div class="col_4 right">
                    <label for="subject">Subject:</label>
                    <input name="subject" type="text" class="required input_field" id="subject" maxlength="40" />
                </div>
                <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                <input type="submit" name="Submit" value="Enviar" class="more left" />
                <input type="reset" name="Reset" value="Borrar" class="more right" />
            </form>
        </div> 
        
        <div class="col_2 left">
            <h3>Mapa de ubicacion</h3>
            <div class="img_border">
            <iframe width="421" height="180" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1850.4230846976877!2d-102.30176524190192!3d21.940464496377924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ef7555938ebb%3A0x1ceff001a554b16a!2sDesarrollo+Especial+Universidad+Cuauht%C3%A9moc%2C+20116+Aguascalientes%2C+Ags.!5e0!3m2!1ses-419!2smx!4v1565562474329!5m2!1ses-419!2smx"></iframe></div><br />
            

            <div class="clear"></div>
            
            <div align="center">
                <h3>Localizacion</h3>
                CINE IDDS , 20116 Aguascalientes, Ags.,<br />
                          <br /><br />
                
                 Tel: 020-010-9009<br />
                 Fax: 020-010-8008<br /><br />
                 
                 



            </div>
            <div class="col_4 right">
               
               
            </div>
        </div>
        
        <div class="clear"></div>
    </div>
    <div id="templatemo_footer">
    <div class="col_2 left">Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto.
            <a href="#">#CineIDDS</a> |    <a href="#">Siguenos en Twitter</a> <br> 
            Copyright©  <a href="#">Cine IDDS</a>
        </div>  
    </div>
</div>
</div>
</body>
</html>