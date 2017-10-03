<?php

/**
 * INSUMOS_MYSQL.class.php
 * INSUMOS
 **/
class INSUMOS_MYSQL {

	public static $DATABASE_NAME = 'posgourmet';
	public static $TABLE_NAME = 'insumos_mysql';




public $CONN;
	/**
	 * @var COD_INS
	 */
	public $COD_INS ;
	/**
	 * @var NOM_INSUMO
	 */
	public $NOM_INSUMO ;
	/**
	 * @var STOCK_MIN
	 */
	public $STOCK_MIN ;
	/**
	 * @var STOCK_ACT
	 */
	public $STOCK_ACT ;
	/**
	 * @var MEDIDA
	 */
	public $MEDIDA ;
	/**
	 * @var MEDIDAM
	 */
	public $MEDIDAM ;
	/**
	 * @var OPE_MM
	 */
	public $OPE_MM ;
	/**
	 * @var VAL_FOR_MM
	 */
	public $VAL_FOR_MM ;
	/**
	 * @var OPE_MX
	 */
	public $OPE_MX ;
	/**
	 * @var MEDIDAX
	 */
	public $MEDIDAX ;
	/**
	 * @var VAL_FOR_MX
	 */
	public $VAL_FOR_MX ;
	/**
	 * @var ADICIONADO
	 */
	public $ADICIONADO ;
	/**
	 * @var CAN_ADI
	 */
	public $CAN_ADI ;
	/**
	 * @var ESTADO
	 */
	public $ESTADO ;
	/**
	 * @var COD_PROD
	 */
	public $COD_PROD ;
	/**
	 * @var UNIDAD
	 */
	public $UNIDAD ;
	public $ID ;

function INSUMOS_MYSQL($con) {$this->CON=$con;}

	function contructor($COD_INS,$NOM_INSUMO,$STOCK_MIN,$STOCK_ACT,$MEDIDA,$MEDIDAM,$OPE_MM,$VAL_FOR_MM,$OPE_MX,$MEDIDAX,$VAL_FOR_MX,$ADICIONADO,$CAN_ADI,$ESTADO,$COD_PROD,$UNIDAD,$ID){
	$this->COD_INS=$COD_INS;
	$this->NOM_INSUMO=$NOM_INSUMO;
	$this->STOCK_MIN=$STOCK_MIN;
	$this->STOCK_ACT=$STOCK_ACT;
	$this->MEDIDA=$MEDIDA;
	$this->MEDIDAM=$MEDIDAM;
	$this->OPE_MM=$OPE_MM;
	$this->VAL_FOR_MM=$VAL_FOR_MM;
	$this->OPE_MX=$OPE_MX;
	$this->MEDIDAX=$MEDIDAX;
	$this->VAL_FOR_MX=$VAL_FOR_MX;
	$this->ADICIONADO=$ADICIONADO;
	$this->CAN_ADI=$CAN_ADI;
	$this->ESTADO=$ESTADO;
	$this->COD_PROD=$COD_PROD;
	$this->UNIDAD=$UNIDAD;
	$this->ID=$ID;
	}

function insertar() { 
$consulta="INSERT INTO insumos_mysql(COD_INS,NOM_INSUMO,STOCK_MIN,STOCK_ACT,MEDIDA,MEDIDAM,OPE_MM,VAL_FOR_MM,OPE_MX,MEDIDAX,VAL_FOR_MX,ADICIONADO,CAN_ADI,ESTADO,COD_PROD,UNIDAD,ID)values(".$this->COD_INS.",'".$this->NOM_INSUMO."','".$this->STOCK_MIN."','".$this->STOCK_ACT."','".$this->MEDIDA."','".$this->MEDIDAM."','".$this->OPE_MM."','".$this->VAL_FOR_MM."','".$this->OPE_MX."','".$this->MEDIDAX."','".$this->VAL_FOR_MX."','".$this->ADICIONADO."','".$this->CAN_ADI."','".$this->ESTADO."','".$this->COD_PROD."','".$this->UNIDAD."','".$this->ID."')";
   if (!$this->CON->manipular($consulta))
            return 0;
        $consulta = "SELECT LAST_INSERT_ID() as id";
        $resultado = $this->CON->consulta($consulta);
        return $resultado->fetch_assoc()['id'];
}

function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
	$insumos_mysql= new INSUMOS_MYSQL("");

		$insumos_mysql->COD_INS=$row["COD_INS"] ==null?"":$row["COD_INS"];
		$insumos_mysql->NOM_INSUMO=$row["NOM_INSUMO"] ==null?"":$row["NOM_INSUMO"];
		$insumos_mysql->STOCK_MIN=$row["STOCK_MIN"] ==null?"":$row["STOCK_MIN"];
		$insumos_mysql->STOCK_ACT=$row["STOCK_ACT"] ==null?"":$row["STOCK_ACT"];
		$insumos_mysql->MEDIDA=$row["MEDIDA"] ==null?"":$row["MEDIDA"];
		$insumos_mysql->MEDIDAM=$row["MEDIDAM"] ==null?"":$row["MEDIDAM"];
		$insumos_mysql->OPE_MM=$row["OPE_MM"] ==null?"":$row["OPE_MM"];
		$insumos_mysql->VAL_FOR_MM=$row["VAL_FOR_MM"] ==null?"":$row["VAL_FOR_MM"];
		$insumos_mysql->OPE_MX=$row["OPE_MX"] ==null?"":$row["OPE_MX"];
		$insumos_mysql->MEDIDAX=$row["MEDIDAX"] ==null?"":$row["MEDIDAX"];
		$insumos_mysql->VAL_FOR_MX=$row["VAL_FOR_MX"] ==null?"":$row["VAL_FOR_MX"];
		$insumos_mysql->ADICIONADO=$row["ADICIONADO"] ==null?"":$row["ADICIONADO"];
		$insumos_mysql->CAN_ADI=$row["CAN_ADI"] ==null?"":$row["CAN_ADI"];
		$insumos_mysql->ESTADO=$row["ESTADO"] ==null?"":$row["ESTADO"];
		$insumos_mysql->COD_PROD=$row["COD_PROD"] ==null?"":$row["COD_PROD"];
		$insumos_mysql->UNIDAD=$row["UNIDAD"] ==null?"":$row["UNIDAD"];
		$insumos_mysql->ID=$row["ID"] ==null?"":$row["ID"];
		$lista[]=$insumos_mysql;};
	return $lista;}
	else{
            return null;
        }}

function todo(){
        $consulta="select * from insumos_mysql order by ID desc";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }

function buscarXID($id){
        $consulta="select * from insumos_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $insumos_mysql=$this->rellenar($result);
       
        if($insumos_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }

    
      function MostrarMedVenta(){
    	 $consulta="select * from insumos_mysql group by MEDIDA ";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
    function MostrarMedMedia(){
    	 $consulta="select * from insumos_mysql group by MEDIDAM ";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
       function MostrarMedMaxima(){
    	 $consulta="select * from insumos_mysql group by MEDIDAX ";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }

    function modificarCodigoinsumo($id) {
        $consulta = "update posgourmet.insumos_mysql set  COD_INS ='" . $id. "' where ID=" . $id;
        return $this->CON->manipular($consulta);
    }

       function listar($id){//lista para el modal del formulario producto
   	$consulta="select distinct * from insumos_mysql where (NOT EXISTS(SELECT *from relproins_mysql,productos_mysql where relproins_mysql.COD_PROD=productos_mysql.cod_prod and relproins_mysql.COD_INS=insumos_mysql.COD_INS and productos_mysql.cod_prod=".$id." )) ";
   	 $result=$this->CON->consulta($consulta);
        $insumos_mysql=$this->rellenar($result);
  if($insumos_mysql==null){
            return null;
        }
        return $insumos_mysql;
   }
    

}
