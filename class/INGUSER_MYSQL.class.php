<?php/** * INGUSER_MYSQL.class.php * INGUSER **/class INGUSER_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'inguser_mysql';public $CONN;	/**	 * @var INGRESOS	 */	public $INGRESOS ;	/**	 * @var USUARIO	 */	public $USUARIO ;	/**	 * @var VFECHA	 */	public $VFECHA ;	/**	 * @var HORA	 */	public $HORA ;	/**	 * @var CAM_OF	 */	public $CAM_OF ;	public $ID ;function INGUSER_MYSQL($con) {$this->CON=$con;}	function contructor($INGRESOS,$USUARIO,$VFECHA,$HORA,$CAM_OF,$ID){	$this->INGRESOS=$INGRESOS;	$this->USUARIO=$USUARIO;	$this->VFECHA=$VFECHA;	$this->HORA=$HORA;	$this->CAM_OF=$CAM_OF;	$this->ID=$ID;	}function insertar() { $consulta="INSERT INTO(INGRESOS,USUARIO,VFECHA,HORA,CAM_OF,ID)values('".$this->INGRESOS."','".$this->USUARIO."','".$this->VFECHA."','".$this->HORA."','".$this->CAM_OF."','".$this->ID."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$inguser_mysql= new INGUSER_MYSQL("");		$inguser_mysql->INGRESOS=$row["INGRESOS"] ==null?"":$row["INGRESOS"];		$inguser_mysql->USUARIO=$row["USUARIO"] ==null?"":$row["USUARIO"];		$inguser_mysql->VFECHA=$row["VFECHA"] ==null?"":$row["VFECHA"];		$inguser_mysql->HORA=$row["HORA"] ==null?"":$row["HORA"];		$inguser_mysql->CAM_OF=$row["CAM_OF"] ==null?"":$row["CAM_OF"];		$inguser_mysql->ID=$row["ID"] ==null?"":$row["ID"];		$lista[]=$inguser_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from inguser_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from inguser_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $inguser_mysql=$this->rellenar($result);
        if($inguser_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}