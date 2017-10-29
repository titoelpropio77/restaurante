<?php 

include_once "../class/Conexion.php";
include_once "../class/VEN_GRAL_MYSQL.class.php";

$proceso=$_POST['proceso'];
$con= new Conexion();
$conexion= $con->ConexionDB();
$error = "";
$resultado = "";
if (!$con->estado) {
    $error = "No se pudo establecer conexion. Intente nuevamente.";
    $reponse = array("error" => $error, "result" => $resultado);
    echo  json_encode($reponse);
    return;
}
switch ($proceso) {
	case 'guardar':
		$venta=new VEN_GRAL_MYSQL($con);
		$idProducto=$_POST['idProducto'];
		
		
		break;
	
	default:
		# code...
		break;
}

$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);
 ?>