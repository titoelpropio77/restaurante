<?php/** * USUARIOS_MYSQL.class.php * USUARIOS **/class USUARIOS_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'usuarios_mysql';public $CONN;	/**	 * @var CODUSER	 */	public $CODUSER ;	/**	 * @var NOMBRES	 */	public $NOMBRES ;	/**	 * @var CARGO	 */	public $CARGO ;	/**	 * @var USUARIO	 */	public $USUARIO ;	/**	 * @var ESTADO	 */	public $ESTADO ;	/**	 * @var CLAVES	 */	public $CLAVES ;	/**	 * @var NIVEL	 */	public $NIVEL ;	/**	 * @var TURNO	 */	public $TURNO ;	/**	 * @var HORAIN	 */	public $HORAIN ;	/**	 * @var HORASAL	 */	public $HORASAL ;	/**	 * @var MANPRODS	 */	public $MANPRODS ;	/**	 * @var MANINVEN	 */	public $MANINVEN ;	public $ID ;function USUARIOS_MYSQL($con) {$this->CON=$con;}	function contructor($CODUSER,$NOMBRES,$CARGO,$USUARIO,$ESTADO,$CLAVES,$NIVEL,$TURNO,$HORAIN,$HORASAL,$MANPRODS,$MANINVEN,$ID){	$this->CODUSER=$CODUSER;	$this->NOMBRES=$NOMBRES;	$this->CARGO=$CARGO;	$this->USUARIO=$USUARIO;	$this->ESTADO=$ESTADO;	$this->CLAVES=$CLAVES;	$this->NIVEL=$NIVEL;	$this->TURNO=$TURNO;	$this->HORAIN=$HORAIN;	$this->HORASAL=$HORASAL;	$this->MANPRODS=$MANPRODS;	$this->MANINVEN=$MANINVEN;	$this->ID=$ID;	}function insertar() { $consulta="INSERT INTO(CODUSER,NOMBRES,CARGO,USUARIO,ESTADO,CLAVES,NIVEL,TURNO,HORAIN,HORASAL,MANPRODS,MANINVEN,ID)values('".$this->CODUSER."','".$this->NOMBRES."','".$this->CARGO."','".$this->USUARIO."','".$this->ESTADO."','".$this->CLAVES."','".$this->NIVEL."','".$this->TURNO."','".$this->HORAIN."','".$this->HORASAL."','".$this->MANPRODS."','".$this->MANINVEN."','".$this->ID."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$usuarios_mysql= new USUARIOS_MYSQL("");		$usuarios_mysql->CODUSER=$row["CODUSER"] ==null?"":$row["CODUSER"];		$usuarios_mysql->NOMBRES=$row["NOMBRES"] ==null?"":$row["NOMBRES"];		$usuarios_mysql->CARGO=$row["CARGO"] ==null?"":$row["CARGO"];		$usuarios_mysql->USUARIO=$row["USUARIO"] ==null?"":$row["USUARIO"];		$usuarios_mysql->ESTADO=$row["ESTADO"] ==null?"":$row["ESTADO"];		$usuarios_mysql->CLAVES=$row["CLAVES"] ==null?"":$row["CLAVES"];		$usuarios_mysql->NIVEL=$row["NIVEL"] ==null?"":$row["NIVEL"];		$usuarios_mysql->TURNO=$row["TURNO"] ==null?"":$row["TURNO"];		$usuarios_mysql->HORAIN=$row["HORAIN"] ==null?"":$row["HORAIN"];		$usuarios_mysql->HORASAL=$row["HORASAL"] ==null?"":$row["HORASAL"];		$usuarios_mysql->MANPRODS=$row["MANPRODS"] ==null?"":$row["MANPRODS"];		$usuarios_mysql->MANINVEN=$row["MANINVEN"] ==null?"":$row["MANINVEN"];		$usuarios_mysql->ID=$row["ID"] ==null?"":$row["ID"];		$lista[]=$usuarios_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from usuarios_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from usuarios_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $usuarios_mysql=$this->rellenar($result);
        if($usuarios_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}