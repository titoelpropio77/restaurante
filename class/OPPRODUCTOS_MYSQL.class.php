<?php/** * OPPRODUCTOS_MYSQL.class.php * OPPRODUCTOS **/class OPPRODUCTOS_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'opproductos_mysql';public $CONN;	public $ID ;	/**	 * @var COD_PROD	 */	public $COD_PROD ;	/**	 * @var NOM_PROD	 */	public $NOM_PROD ;	/**	 * @var OPCION	 */	public $OPCION ;	/**	 * @var ESTADO	 */	public $ESTADO ;	public $PRE_VENTA ;function OPPRODUCTOS_MYSQL($con) {$this->CON=$con;}	function contructor($ID,$COD_PROD,$NOM_PROD,$OPCION,$ESTADO,$PRE_VENTA){	$this->ID=$ID;	$this->COD_PROD=$COD_PROD;	$this->NOM_PROD=$NOM_PROD;	$this->OPCION=$OPCION;	$this->ESTADO=$ESTADO;	$this->PRE_VENTA=$PRE_VENTA;	}function insertar() { $consulta="INSERT INTO(ID,COD_PROD,NOM_PROD,OPCION,ESTADO,PRE_VENTA)values('".$this->ID."','".$this->COD_PROD."','".$this->NOM_PROD."','".$this->OPCION."','".$this->ESTADO."','".$this->PRE_VENTA."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$opproductos_mysql= new OPPRODUCTOS_MYSQL("");		$opproductos_mysql->ID=$row["ID"] ==null?"":$row["ID"];		$opproductos_mysql->COD_PROD=$row["COD_PROD"] ==null?"":$row["COD_PROD"];		$opproductos_mysql->NOM_PROD=$row["NOM_PROD"] ==null?"":$row["NOM_PROD"];		$opproductos_mysql->OPCION=$row["OPCION"] ==null?"":$row["OPCION"];		$opproductos_mysql->ESTADO=$row["ESTADO"] ==null?"":$row["ESTADO"];		$opproductos_mysql->PRE_VENTA=$row["PRE_VENTA"] ==null?"":$row["PRE_VENTA"];		$lista[]=$opproductos_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from opproductos_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from opproductos_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $opproductos_mysql=$this->rellenar($result);
        if($opproductos_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}