<?php 

include_once "../class/Conexion.php";
include_once "../class/menugrupo.php";

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
$nombre=$_POST['nombre'];
$estado=$_POST['estado'];
$color=$_POST['color'];
$orden=$_POST['orden'];
$con->transacion();
	$menugrupo= new menugrupo($con);
	$menugrupo->contructor(0,0,$nombre,$estado,$color,0,$orden);
	$insertar= $menugrupo->insertar();
	$menugrupo->contructor(0,$insertar,'','','',$insertar,0);
	$modificar= $menugrupo->modificarCodigoGrupo($insertar);

	if ($insertar===0) {
		  $error = "No se pudo insertar al proveedor $nombre. Intente nuevamente.";
		  $con->rollback();
	}else{
		$con->commit();
		$resultado=$menugrupo->todo();
	}
}
if ($proceso==="cargarDatos") {
$id=$_POST['id'];
$con->transacion();
	$menugrupo= new menugrupo($con);
	
	$resultado= $menugrupo->ListarDadaId($id);

}
$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);
 ?>