<?php 

include_once "../class/Conexion.php";
include_once "../class/DETALLES_MYSQL.class.php";

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
if ($proceso==="listarDadaVenta") {
	$id=$_POST['id'];
$detalle=new DETALLES_MYSQL($con);
$resultado=$detalle->listarDadaVenta($id);
}

$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);
 ?>