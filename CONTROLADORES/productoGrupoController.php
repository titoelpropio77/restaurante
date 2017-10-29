<?php 

include_once "../class/Conexion.php";
include_once "../class/RELPROGRU_MYSQL.class.php";
include_once "../class/GRUPOS_MYSQL.class.php";

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

		break;
	case 'listarProductoGrupo':
	   $id=$_POST['id'];
	   $progru=new GRUPOS_MYSQL($con);
	   $lista=$progru->listarProductoGrupo($id);
	   if ($lista) {
	  $resultado=$lista;
	   }else{
	   	$resultado="";
	   }
		break;

		
	default:
		# code...
		break;
}

$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);
 ?>