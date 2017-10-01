<?php 

include_once "../class/Conexion.php";
include_once "../class/producto.php";

$con = new Conexion();
$conexion=$con->ConexionDB();
$proceso=$_POST['proceso'];
$idProducto=$_POST['id'];


$resultado = "";
$error = "";
if (!$conexion) {

	 $error = "No se pudo establecer conexion. Intente nuevamente.";
    $reponse = array("error" => $error, "result" => $resultado);
    echo  json_encode($reponse);
    return;
}
// if ($personalsession == null) {
//     $error = "Error Session";
//     $reponse = array("error" => $error, "result" => $resultado);
//     echo $_GET['callback'] . json_encode($reponse);
//     return;
// }

if ($proceso==="cargarDatos") {
$producto= new producto($con);

$resultado=$producto->ListarDadaId($idProducto);
}
if ($proceso==="modificarPoducto") {

	 $con->transacion();
	$producto= new producto($con);

	$estado=$_POST['estado'];
	$nombreProducto=$_POST['nombreProducto'];
$cantidad=$_POST['cantidad'];
$unid=$_POST['unid'];
$grupo=$_POST['grupo'];
$disponible=$_POST['disponible'];
$sugiere=$_POST['sugiere'];
$colorProducto=$_POST['colorProducto'];
$barcode=$_POST['barcode'];
$precioVenta=$_POST['precioVenta'];
$familia=$_POST['familia'];
$barcode=$_POST['barcode'];

$producto->contructor($idProducto,$idProducto,$nombreProducto,$cantidad,$precioVenta,$estado,"",$unid,"43",$colorProducto,"",""," ",$grupo,$disponible,
$barcode,$familia);
if ($producto->modificar($idProducto)) {
    $con->commit();
}
else{
   $error = "No se pudo modificar al producto  Intente nuevamente.";
   $con->rollback();
}
	}

$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);

 ?>