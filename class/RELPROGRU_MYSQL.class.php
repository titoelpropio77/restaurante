<?php/** * RELPROGRU_MYSQL.class.php *  **/class RELPROGRU_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'relprogru_mysql';public $CONN;	public $ID ;	public $COD_GRUPO ;	public $COD_PROD ;	public $CANTIDAD ;	public $UNIDAD ;	public $FACTOR ;	public $NOM_PROD ;	public $CANGRUPO ;	public $ORDEN ;function RELPROGRU_MYSQL($con) {$this->CON=$con;}	function contructor($ID,$COD_GRUPO,$COD_PROD,$CANTIDAD,$UNIDAD,$FACTOR,$NOM_PROD,$CANGRUPO,$ORDEN){	$this->ID=$ID;	$this->COD_GRUPO=$COD_GRUPO;	$this->COD_PROD=$COD_PROD;	$this->CANTIDAD=$CANTIDAD;	$this->UNIDAD=$UNIDAD;	$this->FACTOR=$FACTOR;	$this->NOM_PROD=$NOM_PROD;	$this->CANGRUPO=$CANGRUPO;	$this->ORDEN=$ORDEN;	}function insertar() { $consulta="INSERT INTO(ID,COD_GRUPO,COD_PROD,CANTIDAD,UNIDAD,FACTOR,NOM_PROD,CANGRUPO,ORDEN)values('".$this->ID."','".$this->COD_GRUPO."','".$this->COD_PROD."','".$this->CANTIDAD."','".$this->UNIDAD."','".$this->FACTOR."','".$this->NOM_PROD."','".$this->CANGRUPO."','".$this->ORDEN."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$relprogru_mysql= new RELPROGRU_MYSQL("");		$relprogru_mysql->ID=$row["ID"] ==null?"":$row["ID"];		$relprogru_mysql->COD_GRUPO=$row["COD_GRUPO"] ==null?"":$row["COD_GRUPO"];		$relprogru_mysql->COD_PROD=$row["COD_PROD"] ==null?"":$row["COD_PROD"];		$relprogru_mysql->CANTIDAD=$row["CANTIDAD"] ==null?"":$row["CANTIDAD"];		$relprogru_mysql->UNIDAD=$row["UNIDAD"] ==null?"":$row["UNIDAD"];		$relprogru_mysql->FACTOR=$row["FACTOR"] ==null?"":$row["FACTOR"];		$relprogru_mysql->NOM_PROD=$row["NOM_PROD"] ==null?"":$row["NOM_PROD"];		$relprogru_mysql->CANGRUPO=$row["CANGRUPO"] ==null?"":$row["CANGRUPO"];		$relprogru_mysql->ORDEN=$row["ORDEN"] ==null?"":$row["ORDEN"];		$lista[]=$relprogru_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from relprogru_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from relprogru_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $relprogru_mysql=$this->rellenar($result);
        if($relprogru_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}