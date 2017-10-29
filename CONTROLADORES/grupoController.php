<?php 

include_once "../class/Conexion.php";
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
if ($proceso==="guardar") {
$nombreGrupo=$_POST['nombreGrupo'];
$grupo=new GRUPOS_MYSQL($con);
$grupo->contructor('0',$nombreGrupo,0,0,0);
$insertar=$grupo->insertar();

if ($insertar) {
	$modificar=$grupo->modificar($insertar);
}

$con->transacion();
	

	if ($insertar===0) {
		  $error = "No se pudo insertar al GRUPO Intente nuevamente.";
		  $con->rollback();
	}else{
			$con->commit();
		$resultado=$grupo->todo();
	}
}

$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);
 ?>