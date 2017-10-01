<?php 

include_once "../class/Conexion.php";
include_once "../class/INSUMOS_MYSQL.class.php";

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
$NombreInsumo=$_POST['NombreInsumo'];
$MedidaVenta=$_POST['MedidaVenta'];
$StockMinimo=$_POST['StockMinimo'];
$StockActual=$_POST['StockActual'];
$MedidaMedia=$_POST['MedidaMedia'];
$OperadorMedia=$_POST['OperadorMedia'];
$EquivalenciaMedia=$_POST['EquivalenciaMedia'];
$MedidaMaxima=$_POST['MedidaMaxima'];
$EquivalenciaMaxima=$_POST['EquivalenciaMaxima'];
$OperadorMaxima=$_POST['OperadorMaxima'];



$con->transacion();
	$insumos= new INSUMOS_MYSQL($con);
	$insumos->contructor(0,$NombreInsumo,$StockMinimo,$StockActual,$MedidaVenta,$MedidaMedia,$OperadorMedia,$EquivalenciaMedia,$OperadorMaxima,$MedidaMaxima,$EquivalenciaMaxima,'0','0','ACTIVO','0','0',0);
	$insertar= $insumos->insertar();
$insumos->modificarCodigoinsumo($insertar);

	if ($insertar===0) {
		  $error = "No se pudo insertar al proveedor Intente nuevamente.";
		  $con->rollback();
	}else{
			$con->commit();
		$resultado=$insumos->todo();
	}
}
if ($proceso==="cargarDatos") {
	$resultado=array();
$id=$_POST['id'];
	$insumos= new INSUMOS_MYSQL($con);
	
	$resultado= $insumos->buscarXID($id);


}
$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);
 ?>