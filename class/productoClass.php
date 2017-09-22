<?php 
/**
* 
*/
class ClassName 
{		
	var $id;
	var $cod_prod;
	var $nom_prod;
	var $cantidad;
	var $pre_venta;
	var $pre_venta;
	var $unid;
	var $grupo;
	var $disponible;
	var $estado;
	var $presa;
	var $familia;
	var $unidad;
	var $pre_costo;
	var $colores;
	var $nuevo;
	var $stock;
	var $cantidadac;
	var $CON;
	function DETALLEFACTURA($con) {
		$this->CON=$con;
	}
	
	function contructor($id, $cantidad, $plato_id, $Producto_Id){
		$this->factura_id = $factura_id;
		$this->cantidad = $cantidad;
		$this->plato_id = $plato_id;
		$this->Producto_Id = $Producto_Id;
	}
}
	


 ?>