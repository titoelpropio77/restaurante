<?php/** * MESAS_MYSQL.class.php * MESAS **/class MESAS_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'mesas_mysql';public $CONN;	public $ID ;	/**	 * @var NRO_MESA	 */	public $NRO_MESA ;	/**	 * @var ESTADO	 */	public $ESTADO ;	/**	 * @var USO	 */	public $USO ;	/**	 * @var ORDEN	 */	public $ORDEN ;	/**	 * @var COLORES	 */	public $COLORES ;	/**	 * @var PROCESANDO	 */	public $PROCESANDO ;	public $DELETEADO ;function MESAS_MYSQL($con) {$this->CON=$con;}	function contructor($ID,$NRO_MESA,$ESTADO,$USO,$ORDEN,$COLORES,$PROCESANDO,$DELETEADO){	$this->ID=$ID;	$this->NRO_MESA=$NRO_MESA;	$this->ESTADO=$ESTADO;	$this->USO=$USO;	$this->ORDEN=$ORDEN;	$this->COLORES=$COLORES;	$this->PROCESANDO=$PROCESANDO;	$this->DELETEADO=$DELETEADO;	}function insertar() { $consulta="INSERT INTO(ID,NRO_MESA,ESTADO,USO,ORDEN,COLORES,PROCESANDO,DELETEADO)values('".$this->ID."','".$this->NRO_MESA."','".$this->ESTADO."','".$this->USO."','".$this->ORDEN."','".$this->COLORES."','".$this->PROCESANDO."','".$this->DELETEADO."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$mesas_mysql= new MESAS_MYSQL("");		$mesas_mysql->ID=$row["ID"] ==null?"":$row["ID"];		$mesas_mysql->NRO_MESA=$row["NRO_MESA"] ==null?"":$row["NRO_MESA"];		$mesas_mysql->ESTADO=$row["ESTADO"] ==null?"":$row["ESTADO"];		$mesas_mysql->USO=$row["USO"] ==null?"":$row["USO"];		$mesas_mysql->ORDEN=$row["ORDEN"] ==null?"":$row["ORDEN"];		$mesas_mysql->COLORES=$row["COLORES"] ==null?"":$row["COLORES"];		$mesas_mysql->PROCESANDO=$row["PROCESANDO"] ==null?"":$row["PROCESANDO"];		$mesas_mysql->DELETEADO=$row["DELETEADO"] ==null?"":$row["DELETEADO"];		$lista[]=$mesas_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from mesas_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from mesas_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $mesas_mysql=$this->rellenar($result);
        if($mesas_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}