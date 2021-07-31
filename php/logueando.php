<?php
error_reporting(0); 
require_once('./encabezados.php');
require_once('./conexion.php'); 
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); 

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) 
{
    case 'POST':
        $dataentrante = json_decode(file_get_contents('php://input'), true); 

        $pass = $dataentrante['elpass']; 

        if(!$errodb)
        {
            $consulta = sprintf("SELECT estado FROM usuario WHERE nombre='admin' AND clave='%s' AND estado='1' ", mysqli_real_escape_string($conexion, md5($pass)) ); 

            $resultado = $conexion->query($consulta); 
            if(!$resultado)
            {
                $conexion->close(); 
                echo json_encode(['error en la consulta']);
            }
            
            if($resultado->num_rows > 0) 
            {
                // $_SESSION['usuario'] = 'adminadmin';
                echo json_encode(['ok']); 
            }
            else 
            {
                // $_SESSION['usuario'] = 'no-admin';
                echo json_encode(['no']); 
            }
        }
        
        break;
    
    default:
        // code...
        break;
}

?>