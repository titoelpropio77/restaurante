<?php 



$con= new Conexion();
$conexion= $con->ConexionDB();

$resultado = "";
if (!$con->estado) {
    $error = "No se pudo establecer conexion. Intente nuevamente.";
    $reponse = array("error" => $error, "result" => $resultado);
    echo  json_encode($reponse);
    return;
}
//if (isset($_POST['btnGuardarInsumoProducto'])) {
function guardarInsumoProducto(){
$error = "";
$con= new Conexion();
$conexion= $con->ConexionDB();
$insProd=new RELPROINS_MYSQL($con);
$COD_INS=$_POST['insumo'];
$COD_PROD=$_POST['producto'];
$CANTIDAD=$_POST['cantidad'];
for ($i=0; $i <count($COD_INS) ; $i++) { 
	$insProd->contructor(0,$COD_PROD,$COD_INS[$i],$CANTIDAD[$i],'');
$insertar=$insProd->insertar();
if ($insertar===0) {
	$error='ERROR AL INSERTAR DATOS';
}


}
if($error!=''){
	return false;
}else{
	return true;

}

}

function modificarInsumoProducto(){
$error = "";
$con= new Conexion();
$conexion= $con->ConexionDB();
$insProd=new RELPROINS_MYSQL($con);
$ID=$_POST['idInsumoProducto'];
$CANTIDAD=$_POST['CantidadRelInsPro'];
$con->transacion();
$modificar =$insProd->modificar($ID,$CANTIDAD);
if (!$modificar) {
	$con->rollback();
	return false;
}else{
	$con->commit();
	return true;
}


}

function EliminarInsumoProducto(){
	$error = "";
$con= new Conexion();
$conexion= $con->ConexionDB();
$insProd=new RELPROINS_MYSQL($con);
$ID=$_POST['idInsumoEliminar'];
$eliminar=$insProd->eliminar($ID);

if (!$eliminar) {
	$con->rollback();
	return false;
}else{
	$con->commit();
	return true;
}
}

 /// esta funcion lista en el modal insumo producto
//if(isset($_POST['btnInsumoProducto'])){

