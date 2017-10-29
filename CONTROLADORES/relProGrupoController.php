<?php 

include_once "../class/Conexion.php";
include_once "../class/RELPROGRU_MYSQL.class.php";

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
		$venta=new RELPROGRU_MYSQL($con);
		
		$idProducto=$_POST['id'];
		$cantidad=$_POST['cantidad'];
		$unidad=$_POST['unidad'];
		$nombre=$_POST['nombre'];
		$factor=$_POST['dato'];
		$codigoGrupo=$_POST['dato2'];

		for ($i=0; $i <count($factor) ; $i++) { 
			$venta->contructor(0,$codigoGrupo[$i],$idProducto,$cantidad,$unidad,$factor[$i],$nombre,0,0,"");
			$insertar=$venta->insertar();
			if ($insertar ==0) {
				$error="error";
			}
		}
		
		break;

	case 'modificarFactor':

			$relprogru=new RELPROGRU_MYSQL($con);
			$factor=$_POST['factor'];
			$id=$_POST['id'];
			$modificar=$relprogru->modificar($id,$factor);
			if (!$modificar) {
				$error="error";
			}

		break;

		case 'eliminarRelProGru':
				$id=$_POST['id'];
				$relprogru=new RELPROGRU_MYSQL($con);
				$relprogru->eliminar($id);
			break;
	
	default:
		# code...
		break;
}

$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);
 ?>