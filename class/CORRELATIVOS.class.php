<?php/** * CORRELATIVOS.class.php *  **/class CORRELATIVOS {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'correlativos';public $CONN;	public $id ;	public $tabla ;	public $folio ;	public $folior ;	public $ordendia ;function CORRELATIVOS($con) {$this->CON=$con;}	function contructor($id,$tabla,$folio,$folior,$ordendia){	$this->id=$id;	$this->tabla=$tabla;	$this->folio=$folio;	$this->folior=$folior;	$this->ordendia=$ordendia;	}function insertar() { $consulta="INSERT INTO(id,tabla,folio,folior,ordendia)values('".$this->id."','".$this->tabla."','".$this->folio."','".$this->folior."','".$this->ordendia."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$correlativos= new CORRELATIVOS("");		$correlativos->id=$row["id"] ==null?"":$row["id"];		$correlativos->tabla=$row["tabla"] ==null?"":$row["tabla"];		$correlativos->folio=$row["folio"] ==null?"":$row["folio"];		$correlativos->folior=$row["folior"] ==null?"":$row["folior"];		$correlativos->ordendia=$row["ordendia"] ==null?"":$row["ordendia"];		$lista[]=$correlativos;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from correlativos";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from correlativos where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $correlativos=$this->rellenar($result);
        if($correlativos==null){
            return null;
        }
        return $this->rellenar($result);
    }}