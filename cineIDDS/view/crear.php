
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}else
{
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crear cuenta</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 
<script type="text/JavaScript" src="funciones.js"></script> 

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
    </div><p></p>
    <div id="templatemo_menu"><p></p>
           <ul>
            <ul>
            <li><a href="index.php" >Inicio</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <li><a href="proxim.php">Prox. Estrenos</a></li>
            <li><a href="Snacks.php">Snacks</a></li>
           
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        
        </ul>

        
        
    </div>
    <div id="templatemo_middle" align="center">
    

       
     
<center><h1>Registrarte Admin</h1></center>
        <div class ="login" >
            <form action ="../controller/crear.php" method ="POST">
            <fieldset>
                <legend>Crear cuenta</legend> 
            <table  width="200"> 
                <tr>
                    <td><input title="Es necesario un nombre de usuario" type="text" class ="pass" name ="nombre" placeholder="Nombre" required> <input title="Campo obligatorio" class ="pass" type="text" name ="apellido" placeholder="Apellido" required></td>
                </tr>
                <tr>
                    <td><input title="Campo obligatorio" type ="text" name = "usuario" class ="pass" placeholder ="Nombre de usuario" required></td>
                </tr>
                <tr>
                    <td><input title ="Campo obligatorio" class="pass" type ="password" name ="pass1" placeholder="Contraseña" required></td>
                </tr>
                <tr>
                    <td><input title ="Campo obligatorio" class="pass" type ="password" name ="pass2" placeholder="Verificar Contraseña" required></td>
                </tr>   
            </table>  <br><br> 
                <input type ="submit" value =" registrarse"  id ="AP">
              </fieldset>
            </form>
        </div>






        
        <div class="clear">
            <a href="index.php">Cancelar Registro</a>
            <br>
            <br>
            <br>
        </div>
    </div>
    <div id="templatemo_footer">
    <div class="col_2 left">Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto.
            <a href="#">#CineVerse</a> |    <a href="#">Siguenos en Twitter</a> <br> 
            Copyright©  <a href="#">CineVerse</a>
        </div>  
    </div>
</div>
</div>
</body>
</html>
