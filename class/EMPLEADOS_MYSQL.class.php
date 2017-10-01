<?php/** * EMPLEADOS_MYSQL.class.php * EMPLEADOS **/class EMPLEADOS_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'empleados_mysql';public $CONN;	/**	 * @var COD_EMPL	 */	public $COD_EMPL ;	/**	 * @var NOM_EMPL	 */	public $NOM_EMPL ;	/**	 * @var DIR_EMPL	 */	public $DIR_EMPL ;	/**	 * @var CI_EMPL	 */	public $CI_EMPL ;	/**	 * @var CARGO	 */	public $CARGO ;	/**	 * @var SUELD_EMPL	 */	public $SUELD_EMPL ;	/**	 * @var ESTADO	 */	public $ESTADO ;	/**	 * @var PORCENTAJE	 */	public $PORCENTAJE ;	public $ID ;function EMPLEADOS_MYSQL($con) {$this->CON=$con;}	function contructor($COD_EMPL,$NOM_EMPL,$DIR_EMPL,$CI_EMPL,$CARGO,$SUELD_EMPL,$ESTADO,$PORCENTAJE,$ID){	$this->COD_EMPL=$COD_EMPL;	$this->NOM_EMPL=$NOM_EMPL;	$this->DIR_EMPL=$DIR_EMPL;	$this->CI_EMPL=$CI_EMPL;	$this->CARGO=$CARGO;	$this->SUELD_EMPL=$SUELD_EMPL;	$this->ESTADO=$ESTADO;	$this->PORCENTAJE=$PORCENTAJE;	$this->ID=$ID;	}function insertar() { $consulta="INSERT INTO(COD_EMPL,NOM_EMPL,DIR_EMPL,CI_EMPL,CARGO,SUELD_EMPL,ESTADO,PORCENTAJE,ID)values('".$this->COD_EMPL."','".$this->NOM_EMPL."','".$this->DIR_EMPL."','".$this->CI_EMPL."','".$this->CARGO."','".$this->SUELD_EMPL."','".$this->ESTADO."','".$this->PORCENTAJE."','".$this->ID."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$empleados_mysql= new EMPLEADOS_MYSQL("");		$empleados_mysql->COD_EMPL=$row["COD_EMPL"] ==null?"":$row["COD_EMPL"];		$empleados_mysql->NOM_EMPL=$row["NOM_EMPL"] ==null?"":$row["NOM_EMPL"];		$empleados_mysql->DIR_EMPL=$row["DIR_EMPL"] ==null?"":$row["DIR_EMPL"];		$empleados_mysql->CI_EMPL=$row["CI_EMPL"] ==null?"":$row["CI_EMPL"];		$empleados_mysql->CARGO=$row["CARGO"] ==null?"":$row["CARGO"];		$empleados_mysql->SUELD_EMPL=$row["SUELD_EMPL"] ==null?"":$row["SUELD_EMPL"];		$empleados_mysql->ESTADO=$row["ESTADO"] ==null?"":$row["ESTADO"];		$empleados_mysql->PORCENTAJE=$row["PORCENTAJE"] ==null?"":$row["PORCENTAJE"];		$empleados_mysql->ID=$row["ID"] ==null?"":$row["ID"];		$lista[]=$empleados_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from empleados_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from empleados_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $empleados_mysql=$this->rellenar($result);
        if($empleados_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}