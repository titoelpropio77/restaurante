<?php 

include_once "../class/Conexion.php";
include_once "../class/MESAS_MYSQL.class.php";

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
		$mesas=new MESAS_MYSQL($con);
		$resultado=$mesas->todo();

		break;
	
	default:
		# code...
		break;
}

$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);
 ?>