<!DOCTYPE html>
<html lang="es">
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
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('.dropdown-toggle').dropdown();
        }
        );
    </script>
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
        <h1>Stop Staring, Start Playing??</h1>
      </div>
      <title>Listar</title>
</head>
<body>  
  <div class="conten">
        <div class="uno">
        <?php
          require("conexion.php");
          $idcone=conexion();
          echo"<h2>"."Listado Completo"."</h2>";
          echo "<hr>";
          echo "<br>";
          echo "<table border=1 align=center width=90%>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>"."No.Pos ";
          echo "<th>"."No.Cliente  ";
          echo "<th>"."Nombre";
          echo "<th>"."Telefono";
          echo "<th>"."Correo";
          echo "<th>"."Contrase??a";
          echo "</tr>";
          echo "</thead>";
          $contador=0;
          $SQL= "Select * from clientes";
          $registro=mysqli_query($idcone,$SQL);
          while($fila=mysqli_fetch_array($registro))
          {
            $contador++;
            echo "<tr>" ;
          echo "<td align=center>".$contador;
          echo "<td align=center>".$fila['id'];
          echo "<td align=center>".$fila['nombre'];
          echo "<td align=center>".$fila['telefono'];
          echo "<td align=center>".$fila['correo'];
          echo "<td align=center>".$fila['contrasena'];
          echo "</tr>";
          }
          echo "</table>";
          mysqli_free_result($registro);
          mysqli_close($idcone);
          ?>
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