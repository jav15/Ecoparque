
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Iniciar Sesión VisiónWeb</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/general.css">
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="shortcut icon" href="img/iconoex.png">
    <link rel="stylesheet" href="assets/main.css">
    <style type="text/css">
      body { 
  background: url('img/logo.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
    </style>
  </head>
  <body>
    <div class="error">
      <span>Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
    </div>


    <div class="main">
     <form action="" id="formLg">
        <input type="text" name="usuariolg" pattern="[A-Za-z0-9_-]{1,15}"  placeholder="Usuario" required>
        <input type="password" name="passlg" pattern="[A-Za-z0-9_-]{1,15}"  placeholder="Contraseña" required>
        <input type="submit" class="botonlg"  value="Iniciar Sesion" >
     </form>
    </div>

    <script src="lib/jquery-3.3.1.min.js"></script>
    <script src="lib/main.js"></script>
  </body>
</html>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
