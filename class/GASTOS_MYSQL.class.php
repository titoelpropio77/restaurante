<?php/** * GASTOS_MYSQL.class.php * GASTOS **/class GASTOS_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'gastos_mysql';public $CONN;	/**	 * @var NROGASTO	 */	public $NROGASTO ;	/**	 * @var FECHAGASTO	 */	public $FECHAGASTO ;	/**	 * @var ENTREGADOA	 */	public $ENTREGADOA ;	/**	 * @var CONCEPTO	 */	public $CONCEPTO ;	/**	 * @var HORAGASTO	 */	public $HORAGASTO ;	/**	 * @var LOGIN	 */	public $LOGIN ;	/**	 * @var CAM_OF	 */	public $CAM_OF ;	/**	 * @var MONTO	 */	public $MONTO ;	/**	 * @var TURNO	 */	public $TURNO ;	/**	 * @var ESTADO	 */	public $ESTADO ;	public $ID ;function GASTOS_MYSQL($con) {$this->CON=$con;}	function contructor($NROGASTO,$FECHAGASTO,$ENTREGADOA,$CONCEPTO,$HORAGASTO,$LOGIN,$CAM_OF,$MONTO,$TURNO,$ESTADO,$ID){	$this->NROGASTO=$NROGASTO;	$this->FECHAGASTO=$FECHAGASTO;	$this->ENTREGADOA=$ENTREGADOA;	$this->CONCEPTO=$CONCEPTO;	$this->HORAGASTO=$HORAGASTO;	$this->LOGIN=$LOGIN;	$this->CAM_OF=$CAM_OF;	$this->MONTO=$MONTO;	$this->TURNO=$TURNO;	$this->ESTADO=$ESTADO;	$this->ID=$ID;	}function insertar() { $consulta="INSERT INTO(NROGASTO,FECHAGASTO,ENTREGADOA,CONCEPTO,HORAGASTO,LOGIN,CAM_OF,MONTO,TURNO,ESTADO,ID)values('".$this->NROGASTO."','".$this->FECHAGASTO."','".$this->ENTREGADOA."','".$this->CONCEPTO."','".$this->HORAGASTO."','".$this->LOGIN."','".$this->CAM_OF."','".$this->MONTO."','".$this->TURNO."','".$this->ESTADO."','".$this->ID."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$gastos_mysql= new GASTOS_MYSQL("");		$gastos_mysql->NROGASTO=$row["NROGASTO"] ==null?"":$row["NROGASTO"];		$gastos_mysql->FECHAGASTO=$row["FECHAGASTO"] ==null?"":$row["FECHAGASTO"];		$gastos_mysql->ENTREGADOA=$row["ENTREGADOA"] ==null?"":$row["ENTREGADOA"];		$gastos_mysql->CONCEPTO=$row["CONCEPTO"] ==null?"":$row["CONCEPTO"];		$gastos_mysql->HORAGASTO=$row["HORAGASTO"] ==null?"":$row["HORAGASTO"];		$gastos_mysql->LOGIN=$row["LOGIN"] ==null?"":$row["LOGIN"];		$gastos_mysql->CAM_OF=$row["CAM_OF"] ==null?"":$row["CAM_OF"];		$gastos_mysql->MONTO=$row["MONTO"] ==null?"":$row["MONTO"];		$gastos_mysql->TURNO=$row["TURNO"] ==null?"":$row["TURNO"];		$gastos_mysql->ESTADO=$row["ESTADO"] ==null?"":$row["ESTADO"];		$gastos_mysql->ID=$row["ID"] ==null?"":$row["ID"];		$lista[]=$gastos_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from gastos_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from gastos_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $gastos_mysql=$this->rellenar($result);
        if($gastos_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}