<?php 


function guardarProductoGrupo(){
$error = "";
$con= new Conexion();
$conexion= $con->ConexionDB();
$insProd=new RELPROGRU_MYSQL($con);
$COD_PROD=$_POST['idproducto'];

$COD_GRUPO=$_POST['grupoProducto'];
$FACTOR=$_POST['factorProducto'];
for ($i=0; $i <count($COD_GRUPO) ; $i++) { 
	$insProd->contructor(0,$COD_GRUPO[$i],$COD_PROD,0,0,$FACTOR[$i],'',0,0);
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



 ?>