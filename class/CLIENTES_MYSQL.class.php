<?php/** * CLIENTES_MYSQL.class.php * CLIENTES **/class CLIENTES_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'clientes_mysql';public $CONN;	/**	 * @var COD_CLI	 */	public $COD_CLI ;	/**	 * @var ZONA_CLI	 */	public $ZONA_CLI ;	/**	 * @var NOM_CLI	 */	public $NOM_CLI ;	/**	 * @var TEL_CLI	 */	public $TEL_CLI ;	/**	 * @var CEL_CLI	 */	public $CEL_CLI ;	/**	 * @var NIT_CLI	 */	public $NIT_CLI ;	/**	 * @var DIR_CLI	 */	public $DIR_CLI ;	/**	 * @var MAIL_CLI	 */	public $MAIL_CLI ;	/**	 * @var CI_CLI	 */	public $CI_CLI ;	public $FOTO ;	public $FEC_NAC ;	public $ID ;function CLIENTES_MYSQL($con) {$this->CON=$con;}	function contructor($COD_CLI,$ZONA_CLI,$NOM_CLI,$TEL_CLI,$CEL_CLI,$NIT_CLI,$DIR_CLI,$MAIL_CLI,$CI_CLI,$FOTO,$FEC_NAC,$ID){	$this->COD_CLI=$COD_CLI;	$this->ZONA_CLI=$ZONA_CLI;	$this->NOM_CLI=$NOM_CLI;	$this->TEL_CLI=$TEL_CLI;	$this->CEL_CLI=$CEL_CLI;	$this->NIT_CLI=$NIT_CLI;	$this->DIR_CLI=$DIR_CLI;	$this->MAIL_CLI=$MAIL_CLI;	$this->CI_CLI=$CI_CLI;	$this->FOTO=$FOTO;	$this->FEC_NAC=$FEC_NAC;	$this->ID=$ID;	}function insertar() { $consulta="INSERT INTO(COD_CLI,ZONA_CLI,NOM_CLI,TEL_CLI,CEL_CLI,NIT_CLI,DIR_CLI,MAIL_CLI,CI_CLI,FOTO,FEC_NAC,ID)values('".$this->COD_CLI."','".$this->ZONA_CLI."','".$this->NOM_CLI."','".$this->TEL_CLI."','".$this->CEL_CLI."','".$this->NIT_CLI."','".$this->DIR_CLI."','".$this->MAIL_CLI."','".$this->CI_CLI."','".$this->FOTO."','".$this->FEC_NAC."','".$this->ID."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$clientes_mysql= new CLIENTES_MYSQL("");		$clientes_mysql->COD_CLI=$row["COD_CLI"] ==null?"":$row["COD_CLI"];		$clientes_mysql->ZONA_CLI=$row["ZONA_CLI"] ==null?"":$row["ZONA_CLI"];		$clientes_mysql->NOM_CLI=$row["NOM_CLI"] ==null?"":$row["NOM_CLI"];		$clientes_mysql->TEL_CLI=$row["TEL_CLI"] ==null?"":$row["TEL_CLI"];		$clientes_mysql->CEL_CLI=$row["CEL_CLI"] ==null?"":$row["CEL_CLI"];		$clientes_mysql->NIT_CLI=$row["NIT_CLI"] ==null?"":$row["NIT_CLI"];		$clientes_mysql->DIR_CLI=$row["DIR_CLI"] ==null?"":$row["DIR_CLI"];		$clientes_mysql->MAIL_CLI=$row["MAIL_CLI"] ==null?"":$row["MAIL_CLI"];		$clientes_mysql->CI_CLI=$row["CI_CLI"] ==null?"":$row["CI_CLI"];		$clientes_mysql->FOTO=$row["FOTO"] ==null?"":$row["FOTO"];		$clientes_mysql->FEC_NAC=$row["FEC_NAC"] ==null?"":$row["FEC_NAC"];		$clientes_mysql->ID=$row["ID"] ==null?"":$row["ID"];		$lista[]=$clientes_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from clientes_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from clientes_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $clientes_mysql=$this->rellenar($result);
        if($clientes_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}