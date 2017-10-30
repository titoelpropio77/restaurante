<?php 
/**
* 
*/
class menugrupo 
{		
	public $id;
	public $cod_grupo;
	public $nom_grupo;
	public $estado;
	public $colores;
	public $grupo;
	public $orden;
	public $CON;
 
	  function menugrupo($con) {
        $this->CON = $con;
    }
	
	function contructor($id, $cod_grupo,$nom_grupo,$estado,$colores,$grupo,$orden){
		$this->id = $id;
        $this->cod_grupo=$cod_grupo;
		$this->nom_grupo=$nom_grupo;
		$this->estado=$estado;
		$this->colores=$colores;
		$this->grupo=$grupo;
		$this->orden=$orden;

	}

    function rellenar($resultado) {
        if ($resultado->num_rows > 0) {
            $lista = array();
            while ($row = $resultado->fetch_assoc()) {
                $menugrupo = new menugrupo("");
                $menugrupo->id = $row['ID'] == null ? "" : $row['ID'];
                $menugrupo->cod_grupo = $row['COD_GRUPO'] == null ? "" : $row['COD_GRUPO'];
                $menugrupo->nom_grupo = $row['NOM_GRUPO'] == null ? "" : $row['NOM_GRUPO'];
                $menugrupo->estado = $row['ESTADO'] == null ? "" : $row['ESTADO'];
                $menugrupo->grupo = $row['GRUPO'] == null ? "" : $row['GRUPO'];
             
                
                // $provedor->Contacto = $row['Contacto'] == null ? "" : $row['Contacto'];
                // $provedor->Telefono_Contacto = $row['Telefono_Contacto'] == null ? "" : $row['Telefono_Contacto'];
                // $provedor->sucursal_id = $row['sucursal_id'] == null ? "" : $row['sucursal_id'];
                $lista[] = $menugrupo;
            }
            return $lista;
        } else {
            return null;
        }
    }
	function ListarDadaId($id){
			$consulta="select *from menugrupo_mysql where id=$id";
			   $result = $this->CON->consulta($consulta);
        $producto = $this->rellenar($result);
        if ($producto == null) {
            return null;
        }
        return $producto[0];
   		 }
function insertar(){
$consulta="insert into posgourmet.menugrupo_mysql(ID, NOM_GRUPO,  ESTADO, COLORES, ORDEN) values(0,'" . $this->nom_grupo . "','" . $this->estado . "','" . $this->colores . "'," . $this->orden . ")";
 if (!$this->CON->manipular($consulta))
            return 0;
        $consulta = "SELECT LAST_INSERT_ID() as id";
        $resultado = $this->CON->consulta($consulta);
        return $resultado->fetch_assoc()['id'];


}
         function modificar($id) {
        $consulta = "update posgourmet.menugrupo_mysql set  nom_prod ='" . $this->nom_prod . "', cantidad ='" . $this->cantidad . "', pre_venta ='" . $this->pre_venta . "',  colores ='" . $this->colores . "', disponible ='" . $this->disponible . "', barcode ='" . $this->barcode . "', grupo =" . $this->grupo . ", familia ='" . $this->familia . "' where id=" . $id;
        return $this->CON->manipular($consulta);
    }
             function modificarCodigoGrupo($id) {
        $consulta = "update posgourmet.menugrupo_mysql set  COD_GRUPO ='" . $this->cod_grupo . "', GRUPO =" . $this->grupo . " where id=" . $id;
        return $this->CON->manipular($consulta);
    }
    	 
		function todo(){
		$consulta="select * from menugrupo_mysql  ORDER BY menugrupo_mysql.ID desc";
		$result=$this->CON->consulta($consulta);
     
		return $this->rellenar($result);
	
       }	


	}
	  
	


 ?>