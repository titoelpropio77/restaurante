<?php 


function loguear(){

include_once ( "abms1/class/USUARIOS_MYSQL.class.php");

$fechaActual=date("Y")."-".date('m')."-".date("d");
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
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$usuarios=new USUARIOS_MYSQL($con);
$inguser=new INGUSER_MYSQL($con);
$verificar=$usuarios->verificarExitencia($usuario,$password);



if (count($verificar)>0) {
	$cambio=0;
	$listaInsUser=$inguser->CAM_OF($usuario);
	$tipoCambio=$_POST['tipoCambio'];
	$ultimoUser=$inguser->obtenerUltimo();
	ini_set('date.timezone','America/La_Paz'); 
	 $now = date('G:i');
	$inguser->contructor($ultimoUser[0]->INGRESOS+1,$usuario,$fechaActual,$now,$tipoCambio,0);
	$insertar=$inguser->insertar();
	if ($insertar==0) {
		echo "<script> alert('ERROR')</script>";
		return;
	}
	$_SESSION['camoff'] =$_POST['tipoCambio'];
	$_SESSION['nombres'] = $verificar[0]->NOMBRES;
	$_SESSION['usuario'] = $verificar[0]->USUARIO;
	$_SESSION['nivel'] =  $verificar[0]->NIVEL;

	$_SESSION['cargo'] = $verificar[0]->CARGO;


              //echo '<script type="text/javascript">  $("#ModalLogin").modal("hide"); </script>';
return true;
		
}
return false;
}
function logout(){

@session_start();
$_SESSION['nivel']=null;
session_destroy();
header("Location: index2.php");
}
 ?>