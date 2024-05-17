<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> | Login ADMIN</title>
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="preload" href="css/admin_login.css" type="text/css">
    <link rel="stylesheet" href="css/admin_login.css" type="text/css">
    <link rel="icon" href="images/icono.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-body form-log">
            <form action ="../controller/login.php" method= "POST">
            <div class="row mb-3">
            <br>
            <center> <img src="images/Logo1.webp" alt="" height="145px" width="400px" class="logo-form"> 
            <br>
            <br>
            <h2>LOGIN ADMIN</h2></center> 
            <div class="log-form">
            <div class="col-md-6 campos">
            <input title="Nombre" type="text" name="usuario" placeholder="Usuario" required class="form-control  fondo">
            </div>
            </div>
            <div class="row mb-3 ">
            <div class="col-md-6 campos">    
            <input  title="Contraseña" type="password" name="pass" placeholder="Contraseña" required class="form-control fondo">
            </div>
            </div>
            <br>
            <br>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <center><button type="submit" class="btn btn-primary btn-neon" style="text-decoration:none">
                                <span id="span1"></span>
			                    <span id="span2"></span>
			                    <span id="span3"></span>
			                    <span id="span4"></span>
                                   INICIAR SESION
                                </button></center>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>