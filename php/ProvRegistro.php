<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.104.2">
        
    
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    
        
    
        
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/bootstrap.css" media="all">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css" media="all">
    <link rel="stylesheet" href="../css/miestilo.css">
    <link rel="icon" href="../img/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
     <div class="interior">
        <a href="https://www.fender.com/es/start    " class="logo" target="blank"><img src="../img/fender-guitars-logo.svg" alt="Logo"></a>
        <nav class="navegacion">
          <ul>
          <li><a href="../index.html" >Inicio</a></li>
          
          <li class="submenu">
            <a href="#">Productos</a>
            <ul class="hijos">
              <li><a href="../paginas/ProductAgregar.html">Agreagar</a></li>
              <li><a href="ProductListar.php">Listar</a></li>
              <li><a href="../paginas/ProductAutualizar.html">Actualizar</a></li>
              <li><a href="../paginas/ProductBorrar.html">Borrar</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="#">Empleados</a>
            <ul class="hijos">
              <li><a href="../paginas/empleadosregistro.html">Registro</a></li>
              <li><a href="empleadoslistar.php">Listar</a></li>
              <li><a href="../paginas/empleadosactualizar.html">Actualizar</a></li>
              <li><a href="../paginas/empleadosdelete.html">Borrar</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="#">Clientes</a>
            <ul class="hijos">
              <li><a href="Clilistar.php">Listar</a></li>
              <li><a href="../paginas/ClienActualizar.html">Actualizar</a></li>
              <li><a href="../paginas/ClienDelete.html">Borrar</a></li>
            </ul>
          </li>
          <li class="submenu">
              <a href="#">Pedidos</a>
              <ul class="hijos">
                <li><a href="ListPedidos.php">Listar</a></li>
                <li><a href="../paginas/PedidActualizar.html">Actualizar</a></li>
                <li><a href="../paginas/PedidDorrar">Borrar</a></li>
              </ul>
            </li>
            <li class="submenu">
            <a href="#">Provedores</a>
            <ul class="hijos">
              <li><a href="../paginas/ProvRegistro.html">Registro</a></li>
              <li><a href="ProvList.php">Listar</a></li>
              <li><a href="../paginas/ProvActualizar.html">Actualizar</a></li>
              <li><a href="../paginas/ProvDelete.html">Borrar</a></li>
            </ul>
          </li>
            <li><a href="../paginas/login.html">Login</a></li>
          </ul>
        </nav>
        <h1>Stop Staring, Start Playing¡</h1>
      </div>
      <title>Provedores</title>
</head>
<body>  
  <div class="cont">
    <form class="form">
  <?php
      require_once("conexion.php");
      $idcone= conexion();
      $nombre=$_POST['nombre'];
      $contacto=$_POST['contacto'];
      $SQL="INSERT INTO provedores (nombreemp,contacto) VALUES('$nombre','$contacto')";
      if(mysqli_query($idcone,$SQL))
      {?>
        <script>alert("Se realizo el registro con exito...")</script>
      <?php

      header("Location: ProvList.php");
      }else
      {?>

        <script>alert("No se pudo registrar, intentelo de nuevo...")</script>
      <?php
      
      include("../paginas/ProvRegistro.html");
      }
      mysqli_close($idcone);		 
		 
      
      ?>
		 
		 
      </form>
      </div>
      <main>
        <footer class="container">
          <p class="float-end"><a href="#">Back to top</a></p>
          <p> Copyright &copy;2022. Fender Musical Instruments Corporation. All Rights Reserved. &middot; <a href="https://www.fender.com/es/privacy-policy" target="_blank">Politica de Privacidad</a> &middot; <a href="https://www.fender.com/es/term-of-use" target="_blank">Condiciones de uso</a></p>
        </footer>
      </main>
     
</div>
</body>
</html>