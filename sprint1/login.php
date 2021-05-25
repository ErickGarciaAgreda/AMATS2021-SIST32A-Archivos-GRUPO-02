<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilomenu.css"><!--menu-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  </head>
  <body>
    <!--MENU-->
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      
      <label class="logo"><img src="img/logo.png" width="100px" height="75px"></label>
      <ul>
        <li><a class="active" href="index.php">Inicio</a></li>
        
        <li><a href="#">Marcas</a></li>
        <li><a href="#">Ofertas<a></li>
        <li><a href="#">Nuevos productos</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="#">Login</a></li>

      </ul>
    </nav>

    <!--LOGIN-->
       <form action="validar.php" method="post">

   <h1 class="animate__animated animate__backInLeft">LOGIN</h1>

   <p>Usuario <input type="text" placeholder="INGRESE SU NOMBRE" name="usuario"></p>

   <p>Contraseña <input type="password" placeholder="INGRESE SU CONTRASEÑA" name="contraseña"></p>
   
   <input type="submit" value="Ingresar">
   
   </form> 

  </body>
</html>