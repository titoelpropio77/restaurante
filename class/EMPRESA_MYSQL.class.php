<?php/** * EMPRESA_MYSQL.class.php *  **/class EMPRESA_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'empresa_mysql';public $CONN;	public $ID ;	public $CODEMP ;	public $NOMEMP ;	public $NOMPRO ;	public $CIUPAI ;	public $NITRUC ;	public $LOGO ;	public $DIRLOG ;	public $MONEDA ;	public $SUCURSAL ;	public $ALFA ;	public $DIREMP ;	public $INIFAC ;	public $FINFAC ;	public $FACACT ;	public $FACACTR ;	public $TELEMP ;	public $NUMORDEN ;	public $TIT_IMPOSI ;	public $FEC_DOCIS ;	public $TIT_IMPCLI ;	public $HINITM ;	public $HFINTM ;	public $VERCOD ;	public $PREVIEW ;	public $XP ;	public $GARZONES ;	public $BLOCKER ;	public $COCINACAJA ;	public $INACTIVA ;	public $R1O ;	public $R2O ;	public $R1N ;	public $R2N ;	public $LLAVE ;	public $NROAUTORI ;	public $FECHA_LIM ;	public $MESA ;	public $LLEVAR ;	public $NOMBASE ;	public $ORDENDIA ;	public $IP ;function EMPRESA_MYSQL($con) {$this->CON=$con;}	function contructor($ID,$CODEMP,$NOMEMP,$NOMPRO,$CIUPAI,$NITRUC,$LOGO,$DIRLOG,$MONEDA,$SUCURSAL,$ALFA,$DIREMP,$INIFAC,$FINFAC,$FACACT,$FACACTR,$TELEMP,$NUMORDEN,$TIT_IMPOSI,$FEC_DOCIS,$TIT_IMPCLI,$HINITM,$HFINTM,$VERCOD,$PREVIEW,$XP,$GARZONES,$BLOCKER,$COCINACAJA,$INACTIVA,$R1O,$R2O,$R1N,$R2N,$LLAVE,$NROAUTORI,$FECHA_LIM,$MESA,$LLEVAR,$NOMBASE,$ORDENDIA,$IP){	$this->ID=$ID;	$this->CODEMP=$CODEMP;	$this->NOMEMP=$NOMEMP;	$this->NOMPRO=$NOMPRO;	$this->CIUPAI=$CIUPAI;	$this->NITRUC=$NITRUC;	$this->LOGO=$LOGO;	$this->DIRLOG=$DIRLOG;	$this->MONEDA=$MONEDA;	$this->SUCURSAL=$SUCURSAL;	$this->ALFA=$ALFA;	$this->DIREMP=$DIREMP;	$this->INIFAC=$INIFAC;	$this->FINFAC=$FINFAC;	$this->FACACT=$FACACT;	$this->FACACTR=$FACACTR;	$this->TELEMP=$TELEMP;	$this->NUMORDEN=$NUMORDEN;	$this->TIT_IMPOSI=$TIT_IMPOSI;	$this->FEC_DOCIS=$FEC_DOCIS;	$this->TIT_IMPCLI=$TIT_IMPCLI;	$this->HINITM=$HINITM;	$this->HFINTM=$HFINTM;	$this->VERCOD=$VERCOD;	$this->PREVIEW=$PREVIEW;	$this->XP=$XP;	$this->GARZONES=$GARZONES;	$this->BLOCKER=$BLOCKER;	$this->COCINACAJA=$COCINACAJA;	$this->INACTIVA=$INACTIVA;	$this->R1O=$R1O;	$this->R2O=$R2O;	$this->R1N=$R1N;	$this->R2N=$R2N;	$this->LLAVE=$LLAVE;	$this->NROAUTORI=$NROAUTORI;	$this->FECHA_LIM=$FECHA_LIM;	$this->MESA=$MESA;	$this->LLEVAR=$LLEVAR;	$this->NOMBASE=$NOMBASE;	$this->ORDENDIA=$ORDENDIA;	$this->IP=$IP;	}function insertar() { $consulta="INSERT INTO(ID,CODEMP,NOMEMP,NOMPRO,CIUPAI,NITRUC,LOGO,DIRLOG,MONEDA,SUCURSAL,ALFA,DIREMP,INIFAC,FINFAC,FACACT,FACACTR,TELEMP,NUMORDEN,TIT_IMPOSI,FEC_DOCIS,TIT_IMPCLI,HINITM,HFINTM,VERCOD,PREVIEW,XP,GARZONES,BLOCKER,COCINACAJA,INACTIVA,R1O,R2O,R1N,R2N,LLAVE,NROAUTORI,FECHA_LIM,MESA,LLEVAR,NOMBASE,ORDENDIA,IP)values('".$this->ID."','".$this->CODEMP."','".$this->NOMEMP."','".$this->NOMPRO."','".$this->CIUPAI."','".$this->NITRUC."','".$this->LOGO."','".$this->DIRLOG."','".$this->MONEDA."','".$this->SUCURSAL."','".$this->ALFA."','".$this->DIREMP."','".$this->INIFAC."','".$this->FINFAC."','".$this->FACACT."','".$this->FACACTR."','".$this->TELEMP."','".$this->NUMORDEN."','".$this->TIT_IMPOSI."','".$this->FEC_DOCIS."','".$this->TIT_IMPCLI."','".$this->HINITM."','".$this->HFINTM."','".$this->VERCOD."','".$this->PREVIEW."','".$this->XP."','".$this->GARZONES."','".$this->BLOCKER."','".$this->COCINACAJA."','".$this->INACTIVA."','".$this->R1O."','".$this->R2O."','".$this->R1N."','".$this->R2N."','".$this->LLAVE."','".$this->NROAUTORI."','".$this->FECHA_LIM."','".$this->MESA."','".$this->LLEVAR."','".$this->NOMBASE."','".$this->ORDENDIA."','".$this->IP."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$empresa_mysql= new EMPRESA_MYSQL("");		$empresa_mysql->ID=$row["ID"] ==null?"":$row["ID"];		$empresa_mysql->CODEMP=$row["CODEMP"] ==null?"":$row["CODEMP"];		$empresa_mysql->NOMEMP=$row["NOMEMP"] ==null?"":$row["NOMEMP"];		$empresa_mysql->NOMPRO=$row["NOMPRO"] ==null?"":$row["NOMPRO"];		$empresa_mysql->CIUPAI=$row["CIUPAI"] ==null?"":$row["CIUPAI"];		$empresa_mysql->NITRUC=$row["NITRUC"] ==null?"":$row["NITRUC"];		$empresa_mysql->LOGO=$row["LOGO"] ==null?"":$row["LOGO"];		$empresa_mysql->DIRLOG=$row["DIRLOG"] ==null?"":$row["DIRLOG"];		$empresa_mysql->MONEDA=$row["MONEDA"] ==null?"":$row["MONEDA"];		$empresa_mysql->SUCURSAL=$row["SUCURSAL"] ==null?"":$row["SUCURSAL"];		$empresa_mysql->ALFA=$row["ALFA"] ==null?"":$row["ALFA"];		$empresa_mysql->DIREMP=$row["DIREMP"] ==null?"":$row["DIREMP"];		$empresa_mysql->INIFAC=$row["INIFAC"] ==null?"":$row["INIFAC"];		$empresa_mysql->FINFAC=$row["FINFAC"] ==null?"":$row["FINFAC"];		$empresa_mysql->FACACT=$row["FACACT"] ==null?"":$row["FACACT"];		$empresa_mysql->FACACTR=$row["FACACTR"] ==null?"":$row["FACACTR"];		$empresa_mysql->TELEMP=$row["TELEMP"] ==null?"":$row["TELEMP"];		$empresa_mysql->NUMORDEN=$row["NUMORDEN"] ==null?"":$row["NUMORDEN"];		$empresa_mysql->TIT_IMPOSI=$row["TIT_IMPOSI"] ==null?"":$row["TIT_IMPOSI"];		$empresa_mysql->FEC_DOCIS=$row["FEC_DOCIS"] ==null?"":$row["FEC_DOCIS"];		$empresa_mysql->TIT_IMPCLI=$row["TIT_IMPCLI"] ==null?"":$row["TIT_IMPCLI"];		$empresa_mysql->HINITM=$row["HINITM"] ==null?"":$row["HINITM"];		$empresa_mysql->HFINTM=$row["HFINTM"] ==null?"":$row["HFINTM"];		$empresa_mysql->VERCOD=$row["VERCOD"] ==null?"":$row["VERCOD"];		$empresa_mysql->PREVIEW=$row["PREVIEW"] ==null?"":$row["PREVIEW"];		$empresa_mysql->XP=$row["XP"] ==null?"":$row["XP"];		$empresa_mysql->GARZONES=$row["GARZONES"] ==null?"":$row["GARZONES"];		$empresa_mysql->BLOCKER=$row["BLOCKER"] ==null?"":$row["BLOCKER"];		$empresa_mysql->COCINACAJA=$row["COCINACAJA"] ==null?"":$row["COCINACAJA"];		$empresa_mysql->INACTIVA=$row["INACTIVA"] ==null?"":$row["INACTIVA"];		$empresa_mysql->R1O=$row["R1O"] ==null?"":$row["R1O"];		$empresa_mysql->R2O=$row["R2O"] ==null?"":$row["R2O"];		$empresa_mysql->R1N=$row["R1N"] ==null?"":$row["R1N"];		$empresa_mysql->R2N=$row["R2N"] ==null?"":$row["R2N"];		$empresa_mysql->LLAVE=$row["LLAVE"] ==null?"":$row["LLAVE"];		$empresa_mysql->NROAUTORI=$row["NROAUTORI"] ==null?"":$row["NROAUTORI"];		$empresa_mysql->FECHA_LIM=$row["FECHA_LIM"] ==null?"":$row["FECHA_LIM"];		$empresa_mysql->MESA=$row["MESA"] ==null?"":$row["MESA"];		$empresa_mysql->LLEVAR=$row["LLEVAR"] ==null?"":$row["LLEVAR"];		$empresa_mysql->NOMBASE=$row["NOMBASE"] ==null?"":$row["NOMBASE"];		$empresa_mysql->ORDENDIA=$row["ORDENDIA"] ==null?"":$row["ORDENDIA"];		$empresa_mysql->IP=$row["IP"] ==null?"":$row["IP"];		$lista[]=$empresa_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from empresa_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from empresa_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $empresa_mysql=$this->rellenar($result);
        if($empresa_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}