<?php 

include_once "../class/Conexion.php";
include_once "../class/CLIENTES_MYSQL.class.php";

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
	case 'listarTodo':
		$cliente=new CLIENTES_MYSQL($con);
		$resultado=$cliente->todo();
		break;
	default:
		# code...
		break;
}

$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);
 ?>