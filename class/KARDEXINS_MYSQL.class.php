<?php/** * KARDEXINS_MYSQL.class.php * KARDEXINS **/class KARDEXINS_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'kardexins_mysql';public $CONN;	/**	 * @var REGISTRO	 */	public $REGISTRO ;	/**	 * @var FACTURA	 */	public $FACTURA ;	/**	 * @var COD_INS	 */	public $COD_INS ;	/**	 * @var NOM_INSUMO	 */	public $NOM_INSUMO ;	/**	 * @var CANTIDAD	 */	public $CANTIDAD ;	/**	 * @var FECHA_MOV	 */	public $FECHA_MOV ;	/**	 * @var PORMENORES	 */	public $PORMENORES ;	/**	 * @var ENTRADA	 */	public $ENTRADA ;	/**	 * @var SALIDA	 */	public $SALIDA ;	/**	 * @var SALDO	 */	public $SALDO ;	/**	 * @var MOVIMIENTO	 */	public $MOVIMIENTO ;	public $ID ;function KARDEXINS_MYSQL($con) {$this->CON=$con;}	function contructor($REGISTRO,$FACTURA,$COD_INS,$NOM_INSUMO,$CANTIDAD,$FECHA_MOV,$PORMENORES,$ENTRADA,$SALIDA,$SALDO,$MOVIMIENTO,$ID){	$this->REGISTRO=$REGISTRO;	$this->FACTURA=$FACTURA;	$this->COD_INS=$COD_INS;	$this->NOM_INSUMO=$NOM_INSUMO;	$this->CANTIDAD=$CANTIDAD;	$this->FECHA_MOV=$FECHA_MOV;	$this->PORMENORES=$PORMENORES;	$this->ENTRADA=$ENTRADA;	$this->SALIDA=$SALIDA;	$this->SALDO=$SALDO;	$this->MOVIMIENTO=$MOVIMIENTO;	$this->ID=$ID;	}function insertar() { $consulta="INSERT INTO(REGISTRO,FACTURA,COD_INS,NOM_INSUMO,CANTIDAD,FECHA_MOV,PORMENORES,ENTRADA,SALIDA,SALDO,MOVIMIENTO,ID)values('".$this->REGISTRO."','".$this->FACTURA."','".$this->COD_INS."','".$this->NOM_INSUMO."','".$this->CANTIDAD."','".$this->FECHA_MOV."','".$this->PORMENORES."','".$this->ENTRADA."','".$this->SALIDA."','".$this->SALDO."','".$this->MOVIMIENTO."','".$this->ID."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$kardexins_mysql= new KARDEXINS_MYSQL("");		$kardexins_mysql->REGISTRO=$row["REGISTRO"] ==null?"":$row["REGISTRO"];		$kardexins_mysql->FACTURA=$row["FACTURA"] ==null?"":$row["FACTURA"];		$kardexins_mysql->COD_INS=$row["COD_INS"] ==null?"":$row["COD_INS"];		$kardexins_mysql->NOM_INSUMO=$row["NOM_INSUMO"] ==null?"":$row["NOM_INSUMO"];		$kardexins_mysql->CANTIDAD=$row["CANTIDAD"] ==null?"":$row["CANTIDAD"];		$kardexins_mysql->FECHA_MOV=$row["FECHA_MOV"] ==null?"":$row["FECHA_MOV"];		$kardexins_mysql->PORMENORES=$row["PORMENORES"] ==null?"":$row["PORMENORES"];		$kardexins_mysql->ENTRADA=$row["ENTRADA"] ==null?"":$row["ENTRADA"];		$kardexins_mysql->SALIDA=$row["SALIDA"] ==null?"":$row["SALIDA"];		$kardexins_mysql->SALDO=$row["SALDO"] ==null?"":$row["SALDO"];		$kardexins_mysql->MOVIMIENTO=$row["MOVIMIENTO"] ==null?"":$row["MOVIMIENTO"];		$kardexins_mysql->ID=$row["ID"] ==null?"":$row["ID"];		$lista[]=$kardexins_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from kardexins_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from kardexins_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $kardexins_mysql=$this->rellenar($result);
        if($kardexins_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}