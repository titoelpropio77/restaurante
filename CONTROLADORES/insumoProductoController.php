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

 /// esta funcion lista en el modal insumo producto
//if(isset($_POST['btnInsumoProducto'])){
function listarInsumoProducto(){
$con= new Conexion();
$conexion= $con->ConexionDB();
$insProd=new INSUMOS_MYSQL($con);
$idProducto=$_POST['idProducto'];

$resultado=$insProd->listar($idProducto);
 echo '<script> $("#ModalaReAgregarInsumo").modal("show"); </script>';

return $resultado;
if (count($resultado)>0) {
	return $resultado;	
}
else{
	
}
              
}
