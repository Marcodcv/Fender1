<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
<body>
    
    <?php
    $contraseña=$_POST['contraseña'];
    $usuario=$_POST['usuario'];
    session_start();
    $_SESSION['usuario']=$usuario;
    $idcone=mysqli_connect("localhost","root","","fender");
    $SQL="SELECT * FROM clientes WHERE nombre='$usuario' AND contrasena='$contraseña'";
    $res=mysqli_query($idcone,$SQL);

    $filas=mysqli_num_rows($res);

    
    if($filas)
    {
    header("Location:../paginas/pedidos.html");
    }
    else
    {
    ?>
    <script>alert("Contraseña y/o Usuario incorrecto")</script>
    <?php
    include("../paginas/login.html");
    
    }
    mysqli_free_result($res);
    mysqli_close($idcone);		
    ?>

</body>
</html>