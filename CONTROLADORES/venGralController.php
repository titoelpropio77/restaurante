<?php 

include_once "../class/Conexion.php";
include_once "../class/VEN_GRAL_MYSQL.class.php";
include_once "../class/DETALLES_MYSQL.class.php";
include_once "../class/PRODUCTOS_MYSQL.class.php";
include_once "../class/CORRELATIVOS.class.php";

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
	// $con->transacion();
 		session_start();
 		
		$venta=new VEN_GRAL_MYSQL($con);
		$detalle=new DETALLES_MYSQL($con);
		$idProducto=$_POST['idProducto'];
		$cantidad=$_POST['cantidad'];
		$nombreCli=$_POST['nombreCli'];
		$nitCli=$_POST['nitCli'];
		$cambioBs=$_POST['cambioBs'];
		$cambioUsd=$_POST['cambioUsd'];
		$pagoFacturaBs=$_POST['totalFacturaBs'];//valor del modal factura
		$pagoFacturaUs=$_POST['totalFacturaUs'];//valor del modal factura
		$totalBs=$_POST['totalBs'];
		$totalUsd=$_POST['totalUsd'];
		$formaPago=$_POST['formaPago'];
		$vendedor=$_POST['vendedor'];
		ini_set('date.timezone','America/La_Paz'); 
	 $now = date('G:i');
		$fechaActual=date("Y")."-".date('m')."-".date("d");
		$venta->contructor('0','0',$fechaActual,$_SESSION['usuario'],$formaPago,'ACTIVO','','MESA','NOCHE','','1',$now,$_SESSION['camoff'],$totalBs,0,0,'P','','','','0','0','',0,$totalUsd,$cambioUsd,$pagoFacturaBs,$cambioBs,$_SESSION['camoff'],'0',$nitCli,'0',$nombreCli,'0','0',$fechaActual,'0','0','0','0',0);

		$insertar=$venta->insertar();
		if (!$insertar) {
			$error="error";	
		}
		
		for ($i=0; $i <count($idProducto) ; $i++) { 
			$producto=new PRODUCTOS_MYSQL($con);
			$todo=$producto->buscarXID($idProducto[$i]);
			$detalle->contructor($insertar,'0',$i+1,$idProducto[$i],$cantidad[$i],$todo[0]->pre_costo,$todo[0]->pre_venta,$_SESSION['camoff'],$fechaActual,$now,$todo[0]->nom_prod,'duni','','',$todo[0]->presa,$todo[0]->grupo,'','NOMBRE',$todo[0]->familia,$todo[0]->unid,'MESA',0,0,0,'AGRUPA1','AGRUPA2','AGRUPA3',$todo[0]->cod_grupo,$_SESSION['usuario'],'0','NOTA',$todo[0]->barcode,'2','s',0);
			$insertarDetalle=$detalle->insertar();		
				if (!$insertarDetalle) {
					$error="error";
					// $con->rollback();
				}
		}
		// if ($error!="") {
		// 	$con->commit();
		// }
	
	
		break;
		case 'listarHistorico':
				$venta=new VEN_GRAL_MYSQL($con);
				$resultado=$venta->todo();
				
			break;
	
	default:
		# code...
		break;
}

$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);
 ?>