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
        <h1>Stop Staring, Start Playing¡</h1>
      </div>
      <title>Eliminar</title>
</head>
<body>  
  <div class="conten">
        <div class="uno">
        <?php
          require("conexion.php");
          $idcone=conexion();

          $id=$_POST['id'];
          $SQL="SELECT * FROM inventario WHERE (id LIKE '$id')";
          echo "<h2>"."BAJA DE CLIENTES"."</h2>";
          echo "<hr>";
          echo "<br>";
          echo "<table>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>"."ID Producto:";
          echo "<th>"."Stock:";
          echo "<th>"."Modelo:";
          echo "<th>"."Marca:";
          echo "<th>"."Tipo:";
          echo "<th>"."Precio:";
          echo "<th>"."ID Provedores:";
          echo "</tr>";
          echo "</thead>";

          $registro=mysqli_query($idcone,$SQL);
          if($fila=mysqli_fetch_array($registro))
          {
            echo "<tr>";
            echo "<th align=center>".$fila['id'];
            echo "<th align=center>".$fila['stock'];
            echo "<th align=center>".$fila['modelo'];
            echo "<th align=center>".$fila['marca'];
            echo "<th align=center>".$fila['tipo'];
            echo "<th align=center>".$fila['precio'];
            echo "<th align=center>".$fila['Provedores_id'];
            echo "</tr>";
            echo "</table>";
            mysqli_free_result($registro);
            $consulta="DELETE FROM inventario WHERE(id LIKE '$id')";
            $registro=mysqli_query($idcone,$consulta);
            ?>
            <script>alert("Se Ha dado la baja con exito")</script>
            <?php
          }
          else
          {
            ?>
            <script>alert("El registro no existe")</script>
            <?php
            header("Location:../paginas/empleadosdelete.html");
          }
          mysqli_close($idcone);
          ?>
        </div>
        <br>

        
      <main>
        <footer class="container">
          <p class="float-end"><a href="#">Back to top</a></p>
          <p> Copyright &copy;2022. Fender Musical Instruments Corporation. All Rights Reserved. &middot; <a href="https://www.fender.com/es/privacy-policy" target="_blank">Politica de Privacidad</a> &middot; <a href="https://www.fender.com/es/term-of-use" target="_blank">Condiciones de uso</a></p>
        </footer>
      </main>
      </div>
   
</body>
</html>