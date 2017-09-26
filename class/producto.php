<?php 
/**
* 
*/
class producto 
{		
	public $id;
	public $cod_prod;
	public $nom_prod;
	public $cantidad;
	public $pre_venta;
	public $unid;
	public $grupo;
	public $disponible;
	public $estado;
	public $presa;
	public $unidad;
	public $pre_costo;
	public $colores;
	public $nomb_grupo;
	public $stock;
	public $cantidadac;
	public $barcode;
	public $familia;
	public $CON;
 
	  function producto($con) {
        $this->CON = $con;
    }
	
	function contructor($id, $cod_prod,$nom_prod,$cantidad,$pre_venta,$estado,$presa,$unid,$pre_costo,$colores,$nomb_grupo,$stock,$unidad,$grupo,$disponible,$barcode,$familia){
		$this->nom_prod=$nom_prod;
		$this->id = $id;
		$this->cod_prod = $cod_prod;
		$this->cantidad = $cantidad;
		$this->pre_venta = $pre_venta;
		$this->estado = $estado;
		$this->presa = $presa;
		$this->unidad = $unidad;
		$this->pre_costo = $pre_costo;
		$this->colores = $colores;
		$this->nomb_grupo = $nomb_grupo;
		$this->stock = $stock;
		$this->unid = $unid;
		$this->grupo = $grupo;
		$this->disponible = $disponible;
		$this->barcode= $barcode;
		$this->familia=$familia;
	}

    function rellenar($resultado) {
        if ($resultado->num_rows > 0) {
            $lista = array();
            while ($row = $resultado->fetch_assoc()) {
                $producto = new producto("");
                $producto->id = $row['id'] == null ? "" : $row['id'];
                $producto->cod_prod = $row['cod_prod'] == null ? "" : $row['cod_prod'];
                $producto->nom_prod = $row['nom_prod'] == null ? "" : $row['nom_prod'];
                $producto->cantidad = $row['cantidad'] == null ? "" : $row['cantidad'];
                $producto->pre_venta = $row['pre_venta'] == null ? "" : $row['pre_venta'];
                $producto->estado = $row['estado'] == null ? "" : $row['estado'];
                $producto->unid = $row['unid'] == null ? "" : $row['unid'];
                $producto->colores = $row['colores'] == null ? "" : $row['colores'];
                $producto->grupo = $row['grupo'] == null ? "" : $row['grupo'];
                $producto->disponible = $row['disponible'] == null ? "" : $row['disponible'];
                $producto->barcode = $row['barcode'] == null ? "" : $row['barcode'];
                $producto->familia = $row['familia'] == null ? "" : $row['familia'];

                // $provedor->Contacto = $row['Contacto'] == null ? "" : $row['Contacto'];
                // $provedor->Telefono_Contacto = $row['Telefono_Contacto'] == null ? "" : $row['Telefono_Contacto'];
                // $provedor->sucursal_id = $row['sucursal_id'] == null ? "" : $row['sucursal_id'];
                $lista[] = $producto;
            }
            return $lista;
        } else {
            return null;
        }
    }
	function ListarDadaId($id){
			$consulta="select *from productos_mysql where productos_mysql.id=$id";
			   $result = $this->CON->consulta($consulta);
        $producto = $this->rellenar($result);
        if ($producto == null) {
            return null;
        }
        return $producto[0];
   		 }

   		 function modificar($id) {
        $consulta = "update posgourmet.productos_mysql set  nom_prod ='" . $this->nom_prod . "', cantidad ='" . $this->cantidad . "', pre_venta ='" . $this->pre_venta . "',  colores ='" . $this->colores . "', disponible ='" . $this->disponible . "', barcode ='" . $this->barcode . "', grupo =" . $this->grupo . ", familia ='" . $this->familia . "' where id=" . $id;
        return $this->CON->manipular($consulta);
    }
   		 
			
	}
	  
	


 ?>