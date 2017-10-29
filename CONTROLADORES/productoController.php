<?php 

include_once "../class/Conexion.php";

include_once "../class/producto.php";

include_once "../class/PRODUCTOS_MYSQL.class.php";

include_once "../class/RELPROINS_MYSQL.class.php";

include_once "../class/RELPROGRU_MYSQL.class.php";

$con = new Conexion();
$conexion=$con->ConexionDB();
$proceso=$_POST['proceso'];



$resultado = "";
$resultado2 = "";
$error = "";
$tabla="";
if (!$conexion) {

	 $error = "No se pudo establecer conexion. Intente nuevamente.";
    $reponse = array("error" => $error, "result" => $resultado);
    // echo  json_encode($reponse);
    return;
}


if ($proceso==="guardar") {
	 $nombreProd=$_POST["nombre"];
  $estado=$_POST["estado"];
  $cantidad=$_POST["cantidad"];
  $unidad=$_POST["unidad"];
  $pre_venta=$_POST["pre_venta"];
  $selectGrupo=$_POST["selectGrupo"];
  $disponible=$_POST["disponible"];
  $sujiere=$_POST["sujiere"];
  $colores=$_POST["colores"];
  $barcode=$_POST["barcode"];
	$producto=new producto($con);

	$producto->contructor(0, 0,$nombreProd,$cantidad,$pre_venta,$estado,$sujiere,$unidad,"",$colores,"","","",$selectGrupo,$disponible,$barcode,$sujiere);
	$insertar= $producto->insertar();

	$modificar=$producto->modificarCodigo($insertar);
	if ($insertar === 0 or !$modificar) {
			$error="error";
		}
		else{
			$resultado="INSERTADO CORRECTAMENTE";
		}
}
if ($proceso==="mostrarProductoMenu") {

	$producto= new producto($con);
$idMenu=$_POST['id'];
$resultado=$producto->mostrar($idMenu);	
}

if ($proceso==="cargarDatos") {
$producto= new producto($con);
$idProducto=$_POST['id'];
$resultado=$producto->ListarDadaId($idProducto);
}
if ($proceso==="modificarPoducto") {
$idProducto=$_POST['id'];
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
if ($proceso==="listar") {
	
	$producto= new producto($con);


	$resultado= $producto->todo();
	for ($i=0; $i <count($resultado) ; $i++) { 
		$tabla.="<tr style='text-align: center;'><td>".$resultado[$i]->id.
		"<td>".$resultado[$i]->nom_prod.
		"<td>".$resultado[$i]->cantidad.
		"<td>".$resultado[$i]->unid.
		"<td>".$resultado[$i]->pre_venta.
		"<td>".$resultado[$i]->nom_grupo.
		"<td>".$resultado[$i]->estado.
		"<td><button style='background:  ".$resultado[$i]->colores."; border-color:".$resultado[$i]->colores." ;    width: 100%;  height: 26px;'></button>
        <td><button onclick='cargarDatosProducto(".$resultado[$i]->id.")' class='btn btn-info' title='EDITAR PRODUCTO' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button>
        <button id='".$resultado[$i]->id."' onclick='cargarIdEliminar(this)' nombre='".$resultado[$i]->nom_prod."'  class='btn btn-danger' title='ELIMINAR PRODUCTO' data-toggle='modal' data-target='#ModalEliminarProducto'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
		 $proins=new RELPROINS_MYSQL($con);
		 $resultado2=$proins->buscarXID($resultado[$i]->id);
		if ($resultado2) {
			$tabla.='<td><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo'.$i.'"><i class="fa fa-plus"></i></button>
  <div id="demo'.$i.'" class="collapse">
  <button  class="btn btn-success btn-xs" nombreProducto="'.$resultado[$i]->nom_prod.'" data-toggle="modal" data-target="#ModalaAgregarInsumo" onclick="listarInsumoProducto('.$resultado[$i]->id.',this)" >AGREGAR INSUMO</button>
  <table class="table-striped table-bordered  ">
                <thead><tr><th><center>INSUMO</center></th><th><center>CANTIDAD</center></th><th><center>OPERACION</center></th>
                 </tr></thead><tbody>';
			for ($j=0; $j <count($resultado2) ; $j++) { 
				$tabla.='<tr> <td>'.$resultado2[$j]->NOM_INSUMO.
				         '<td>'.$resultado2[$j]->CANTIDAD.
				         '<td><button onclick="CargarDatosModal(this)" idrelproins="'.$resultado2[$j]->ID.'" class="btn btn-warning btn-xs" data-toggle="modal" cantidad="'.$resultado2[$j]->CANTIDAD.'" data-target="#ModalModificarCantidadInsumo" nombre="'.$resultado2[$j]->NOM_INSUMO.'">EDITAR</button><button idrelproinsE="'.$resultado2[$j]->ID.'" onclick="CargarIdEliminarInsumo(this)" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ModalEliminarInsumoProducto" nombreE="'.$resultado2[$j]->NOM_INSUMO.'">Eliminar</button>' ;
			}
$tabla.="</tbody>
             </table>";
		}
		else{
			$tabla.='<td><button class="btn btn-success" nombreProducto="'.$resultado[$i]->nom_prod.'"  data-toggle="modal" data-target="#ModalaAgregarInsumo" onclick="listarInsumoProducto('.$resultado[$i]->id.',this)" >AGREGAR INSUMO</button>';		}
			$progru=new RELPROGRU_MYSQL($con);
 $resultado2=$progru->buscarXID($resultado[$i]->id);
		if ($resultado2) {
			$tabla.='<td><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demoa'.$i.'"><i class="fa fa-plus"></i></button>
  <div id="demoa'.$i.'" class="collapse">
  <button data-toggle="modal" data-target="#ModalaAgregarGrupoProducto" class="btn btn-success btn-xs" onclick="listarProductoGrupo(this)" id="'.$resultado[$i]->id.'" nombre="'.$resultado[$i]->nom_prod.'"  cantidad="'.$resultado[$i]->cantidad.'" unidad="'.$resultado[$i]->unid.'"  >AGREGAR A GRUPO</button>
  <table class="table-striped table-bordered  ">
                <thead><tr><th><center>GRUPO</center></th><th><center>FACTOR</center></th><th><center>OPERACION</center></th>
                 </tr></thead><tbody>';
			for ($j=0; $j <count($resultado2) ; $j++) { 
				$tabla.='<tr> <td>'.$resultado2[$j]->NOM_GRUPO.'
								    <td>'.$resultado2[$j]->FACTOR.
				         '<td><button onclick="cargarModalFactor(this)" idrelprogru="'.$resultado2[$j]->ID.'" class="btn btn-warning btn-xs" data-toggle="modal" factor="'.$resultado2[$j]->FACTOR.'" nombregrupo="'.$resultado2[$j]->NOM_GRUPO.'" data-target="#ModalModificarFactor">EDITAR</button><button id="'.$resultado2[$j]->ID.'"  onclick="cargarModalEliminarRelProGrupo(this)" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ModalEliminarGrupo" nombregrupo="'.$resultado2[$j]->NOM_GRUPO.'" >Eliminar</button>' ;
			}
$tabla.="</tbody>
             </table>";
		}
		else{
			$tabla.='<td><button class="btn btn-success" data-toggle="modal" data-target="#ModalaAgregarGrupoProducto" onclick="listarProductoGrupo(this)" id="'.$resultado[$i]->id.'" nombre="'.$resultado[$i]->nom_prod.'" cantidad="'.$resultado[$i]->cantidad.'" unidad="'.$resultado[$i]->unid.'" name="btnInsumoProducto">AGREGAR A GRUPO</button>';		}
	

	}

$resultado=$tabla;
	}
$reponse = array("error" => $error, "result" => $resultado);
echo  json_encode($reponse);

 ?>