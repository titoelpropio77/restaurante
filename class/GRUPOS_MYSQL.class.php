<?php/** * GRUPOS_MYSQL.class.php * GRUPOS **/class GRUPOS_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'grupos_mysql';public $CONN;	/**	 * @var COD_GRUPO	 */	public $COD_GRUPO ;	/**	 * @var NOM_GRUPO	 */	public $NOM_GRUPO ;	/**	 * @var FACTOR	 */	public $FACTOR ;	/**	 * @var ORDEN	 */	public $ORDEN ;	public $ID ;function GRUPOS_MYSQL($con) {$this->CON=$con;}	function contructor($COD_GRUPO,$NOM_GRUPO,$FACTOR,$ORDEN,$ID){	$this->COD_GRUPO=$COD_GRUPO;	$this->NOM_GRUPO=$NOM_GRUPO;	$this->FACTOR=$FACTOR;	$this->ORDEN=$ORDEN;	$this->ID=$ID;	}function insertar() { $consulta="INSERT INTO(COD_GRUPO,NOM_GRUPO,FACTOR,ORDEN,ID)values('".$this->COD_GRUPO."','".$this->NOM_GRUPO."','".$this->FACTOR."','".$this->ORDEN."','".$this->ID."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$grupos_mysql= new GRUPOS_MYSQL("");		$grupos_mysql->COD_GRUPO=$row["COD_GRUPO"] ==null?"":$row["COD_GRUPO"];		$grupos_mysql->NOM_GRUPO=$row["NOM_GRUPO"] ==null?"":$row["NOM_GRUPO"];		$grupos_mysql->FACTOR=$row["FACTOR"] ==null?"":$row["FACTOR"];		$grupos_mysql->ORDEN=$row["ORDEN"] ==null?"":$row["ORDEN"];		$grupos_mysql->ID=$row["ID"] ==null?"":$row["ID"];		$lista[]=$grupos_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from grupos_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from grupos_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $grupos_mysql=$this->rellenar($result);
        if($grupos_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}