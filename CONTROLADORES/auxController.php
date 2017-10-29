<?php 

include_once "../class/Conexion.php";
include_once "../class/CLIENTES_MYSQL.class.php";

// $proceso=$_GET['proceso'];
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
if($_GET["action"]=="searchName"){
	$cliente=new CLIENTES_MYSQL($con);
		$resultado=$cliente->buscarNombre($_GET["term"]);
		$finalResult = array();
		for ($i=0; $i <count($resultado) ; $i++) { 
			$a=array("id"=>$resultado[$i]->COD_CLI,"label"=>$resultado[$i]->NOM_CLI."-".$resultado[$i]->NIT_CLI,"value"=>$resultado[$i]->NOM_CLI, "number"=>$resultado[$i]->NIT_CLI);
       		array_push($finalResult,$a);		
		}
 
     echo json_encode($finalResult);

}

 ?>