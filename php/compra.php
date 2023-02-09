<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo2.css">
    <title>Document</title>
</head>
<body>
<div class="cont">
    <br>
    <br>
    <br>
    <form class="formulario">
    <?php
    //Validaciones
    $nom=$_POST['nom'];
    $password=$_POST['contraseña'];
    $email=$_POST['correo'];
    $tel=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $Fecha=$_POST['fecha'];
    $Cantidad=$_POST['Cantidad'];
    $select=$_POST['Tipo'];
    $tarjeta=@$_POST['pago'];
    $opc='';
    $Costo='0';
    if(isset($_POST['Capotraste'])){
        $opc=$opc.''.$_POST['Capotraste'];
    }
    if(isset($_POST['Cuerdas'])){
        $opc=$opc.''.$_POST['Cuerdas'];
    }
    if(isset($_POST['Plumillas'])){
        $opc=$opc.''.$_POST['Plumillas'];
    }
    if(isset($_POST['Funda'])){
        $opc=$opc.''.$_POST['Funda'];
    }
    
    //Operaciones
    if($select == "Electrica")
    {
        $Costo=7623;
    }else
    if($select == "Acustica")
    {
        $Costo=5700;
    }
    else
    if($select == "ElectroAcustica")
    {
        $Costo=6857;
    }
    else
    if($select == "5 cuerdas")
    {
        $Costo=3641;
    }else
    if($select =="4 Cuerdas")
    {
        $Costo=3165;
    }else
    if($select == "6 Cuerdas")
    {
        $Costo=4691;
    }else

    //Checkbox
    switch($opc)
    {
        case "Capotraste": 
            $Costo+=200;
            break;
        case "Cuerdas": 
            $Costo+=320;
            break;
        case "Plumillas": 
            $Costo+=10;
            break;
        case "Funda": 
            $Costo+=1200;
            break;
        default:
        break;   
    }
    $subTotal=$Costo*$Cantidad;
    //Radios//
    if($tarjeta == "Debito")
    {
    $mensaje="Se le hara un descuento del 23%";
    $IVA=$subTotal*0.16;
    $Total1=$IVA+$subTotal;
    $descuento=$Total1*0.23;
    $Total=$Total1-$descuento;
    echo "<h1>Ticket:</h1>";
    echo "<table>";
    echo "<tr><td> Nombre:</td><td> $nom </td> </tr>";
    echo "<tr><td>Contraseña:</td><td> $password</td> </tr>";
    echo "<tr><td>Email:</td><td> $email</td></tr>";
    echo "<tr><td>Direccion: </td><td>$direccion</td></tr> ";
    echo "<tr><td>Telefono:</td><td> $tel</td> </tr>";
    echo "<tr><td>Fecha:</td><td> $Fecha</t></tr>";
    echo "<tr><td>Cantidad:</td><td> $Cantidad</td></tr> ";
    echo "<tr><td>Subtotal:</td><td> $subTotal</td> </tr>";
    echo "<tr><td>IVA(16%): </td><td>$IVA</td></tr> <br>";
    echo "<tr><td>Descuento por pago de contado:</td> <td> $descuento</td></tr>";
    echo "<tr><td>Total:</td><td> $Total</td></tr>";
    echo "</table>";
    }else
    if($tarjeta == "Credito")
    {
        $mensaje="Pago a 12 meses sin intereses";
        $IVA=$subTotal*0.16;
        $Total=$IVA+$subTotal;
    echo "<h1>Ticket:</h1>";
    echo "<table>";
    echo "<tr><td> Nombre:</td><td> $nom </td> </tr>";
    echo "<tr><td>Contraseña:</td><td> $password</td> </tr>";
    echo "<tr><td>Email:</td><td> $email</td></tr>";
    echo "<tr><td>Direccion: </td><td>$direccion</td></tr> ";
    echo "<tr><td>Telefono:</td><td> $tel</td> </tr>";
    echo "<tr><td>Fecha:</td><td> $Fecha</t></tr>";
    echo "<tr><td>Cantidad:</td><td> $Cantidad</td></tr> ";
    echo "<tr><td>Subtotal:</td><td> $subTotal</td> </tr>";
    echo "<tr><td>IVA(16%): </td><td>$IVA</td></tr> <br>";
    echo "<tr><td>Meses sin Intereses:</td> <td> $mensaje</td></tr>";
    echo "<tr><td>Total:</td><td> $Total</td></tr>";
    echo "</table>";
    }else
    ?>
    <br>
    <div class="btn-item">
        <a href="../index.html" class="btn-ghost secundary round">Home</a>
       </div>
    </form>
    </div>
</body>
</html>