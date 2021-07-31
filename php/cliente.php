<?php 
error_reporting(0); 
require_once('./encabezados.php');
require_once('./conexion.php'); 
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); 

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) 
{
    case 'POST':
        echo json_encode(['usuario']);
        
        break;
    
    default:
        break;
} 

?>
