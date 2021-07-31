<?php
// guardar en la db
// $host = "190.233.231.68:3306";
// $user = "munichon_root";
// $pass = "hsJBPV%&TJPQ";
// $bd = "munichon_libroreclamaciones";

$host = "localhost";
$user = "root";
$pass = ""; 
$bd = "dbdas"; 
$conexion = new mysqli($host, $user, $pass, $bd);

$errodb = false; 

if($conexion->connect_error)
{
    $conexion->close(); 
    $errodb = true;  
    echo json_encode(['error en la conexion db']); 
}
?>
