<?php
function conexion()
{
    $host="localhost";
    $usuario="root";
    $clave="";
    $basededatos="fender";
    $idcone=mysqli_connect($host,$usuario,$clave,$basededatos) or 
    die("Error Conectando al servidor $host con el nombre de usuario $usuario");
    return $idcone;
    
}


?>