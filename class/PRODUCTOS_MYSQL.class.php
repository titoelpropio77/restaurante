<?php/** * PRODUCTOS_MYSQL.class.php *  **/class PRODUCTOS_MYSQL {	public static $DATABASE_NAME = 'posgourmet';	public static $TABLE_NAME = 'productos_mysql';public $CONN;	public $id ;	public $cod_prod ;	public $nom_prod ;	public $cantidad ;	public $pre_venta ;	public $unid ;	public $grupo ;	public $disponible ;	public $estado ;	public $presa ;	public $familia ;	public $unidad ;	public $pre_costo ;	public $colores ;	public $nuevo ;	public $stock ;	public $cantidadac ;	public $factor ;	public $agrupa1 ;	public $agrupa2 ;	public $agrupa3 ;	public $cod_grupo ;	public $cod_ins ;	public $posicion ;	public $img ;	public $colorletra ;	public $barcode ;	/**	 * @var ORDENES	 */	public $ordenes ;	/**	 * @var ORDENES1	 */	public $ordenes1 ;	/**	 * @var DECONSUMO	 */	public $deconsumo ;	/**	 * @var IMGNORMAL	 */	public $imgnormal ;	/**	 * @var IMGPRESION	 */	public $imgpresion ;	/**	 * @var IMGSOBRE	 */	public $imgsobre ;	/**	 * @var IMGNODISPO	 */	public $imgnodispo ;	/**	 * @var IMGMNPROD	 */	public $mgmnprod ;	/**	 * @var INVISIBLE	 */	public $invisible ;	/**	 * @var CODEQR	 */	public $codeqr ;	public $f_vence ;	/**	 * @var NOCOCINA	 */	public $nococina ;	/**	 * @var PUNTO	 */	public $punto ;	/**	 * @var GRUPOCMDS	 */	public $grupocmds ;	/**	 * @var GRUPOCMDS1	 */	public $grupocmds1 ;	/**	 * @var INDICE	 */	public $indice ;	public $dia ;	public $imgnorblob ;	public $imgpreblob ;	public $imgsobblob ;	public $imgnodblob ;function PRODUCTOS_MYSQL($con) {$this->CON=$con;}	function contructor($id,$cod_prod,$nom_prod,$cantidad,$pre_venta,$unid,$grupo,$disponible,$estado,$presa,$familia,$unidad,$pre_costo,$colores,$nuevo,$stock,$cantidadac,$factor,$agrupa1,$agrupa2,$agrupa3,$cod_grupo,$cod_ins,$posicion,$img,$colorletra,$barcode,$ordenes,$ordenes1,$deconsumo,$imgnormal,$imgpresion,$imgsobre,$imgnodispo,$mgmnprod,$invisible,$codeqr,$f_vence,$nococina,$punto,$grupocmds,$grupocmds1,$indice,$dia,$imgnorblob,$imgpreblob,$imgsobblob,$imgnodblob){	$this->id=$id;	$this->cod_prod=$cod_prod;	$this->nom_prod=$nom_prod;	$this->cantidad=$cantidad;	$this->pre_venta=$pre_venta;	$this->unid=$unid;	$this->grupo=$grupo;	$this->disponible=$disponible;	$this->estado=$estado;	$this->presa=$presa;	$this->familia=$familia;	$this->unidad=$unidad;	$this->pre_costo=$pre_costo;	$this->colores=$colores;	$this->nuevo=$nuevo;	$this->stock=$stock;	$this->cantidadac=$cantidadac;	$this->factor=$factor;	$this->agrupa1=$agrupa1;	$this->agrupa2=$agrupa2;	$this->agrupa3=$agrupa3;	$this->cod_grupo=$cod_grupo;	$this->cod_ins=$cod_ins;	$this->posicion=$posicion;	$this->img=$img;	$this->colorletra=$colorletra;	$this->barcode=$barcode;	$this->ordenes=$ordenes;	$this->ordenes1=$ordenes1;	$this->deconsumo=$deconsumo;	$this->imgnormal=$imgnormal;	$this->imgpresion=$imgpresion;	$this->imgsobre=$imgsobre;	$this->imgnodispo=$imgnodispo;	$this->mgmnprod=$mgmnprod;	$this->invisible=$invisible;	$this->codeqr=$codeqr;	$this->f_vence=$f_vence;	$this->nococina=$nococina;	$this->punto=$punto;	$this->grupocmds=$grupocmds;	$this->grupocmds1=$grupocmds1;	$this->indice=$indice;	$this->dia=$dia;	$this->imgnorblob=$imgnorblob;	$this->imgpreblob=$imgpreblob;	$this->imgsobblob=$imgsobblob;	$this->imgnodblob=$imgnodblob;	}function insertar() { $consulta="INSERT INTO(id,cod_prod,nom_prod,cantidad,pre_venta,unid,grupo,disponible,estado,presa,familia,unidad,pre_costo,colores,nuevo,stock,cantidadac,factor,agrupa1,agrupa2,agrupa3,cod_grupo,cod_ins,posicion,img,colorletra,barcode,ordenes,ordenes1,deconsumo,imgnormal,imgpresion,imgsobre,imgnodispo,mgmnprod,invisible,codeqr,f_vence,nococina,punto,grupocmds,grupocmds1,indice,dia,imgnorblob,imgpreblob,imgsobblob,imgnodblob)values('".$this->id."','".$this->cod_prod."','".$this->nom_prod."','".$this->cantidad."','".$this->pre_venta."','".$this->unid."','".$this->grupo."','".$this->disponible."','".$this->estado."','".$this->presa."','".$this->familia."','".$this->unidad."','".$this->pre_costo."','".$this->colores."','".$this->nuevo."','".$this->stock."','".$this->cantidadac."','".$this->factor."','".$this->agrupa1."','".$this->agrupa2."','".$this->agrupa3."','".$this->cod_grupo."','".$this->cod_ins."','".$this->posicion."','".$this->img."','".$this->colorletra."','".$this->barcode."','".$this->ordenes."','".$this->ordenes1."','".$this->deconsumo."','".$this->imgnormal."','".$this->imgpresion."','".$this->imgsobre."','".$this->imgnodispo."','".$this->mgmnprod."','".$this->invisible."','".$this->codeqr."','".$this->f_vence."','".$this->nococina."','".$this->punto."','".$this->grupocmds."','".$this->grupocmds1."','".$this->indice."','".$this->dia."','".$this->imgnorblob."','".$this->imgpreblob."','".$this->imgsobblob."','".$this->imgnodblob."')"; return $this->CON->manipular($consulta);}function rellenar($resultado){
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {	$productos_mysql= new PRODUCTOS_MYSQL("");		$productos_mysql->id=$row["id"] ==null?"":$row["id"];		$productos_mysql->cod_prod=$row["cod_prod"] ==null?"":$row["cod_prod"];		$productos_mysql->nom_prod=$row["nom_prod"] ==null?"":$row["nom_prod"];		$productos_mysql->cantidad=$row["cantidad"] ==null?"":$row["cantidad"];		$productos_mysql->pre_venta=$row["pre_venta"] ==null?"":$row["pre_venta"];		$productos_mysql->unid=$row["unid"] ==null?"":$row["unid"];		$productos_mysql->grupo=$row["grupo"] ==null?"":$row["grupo"];		$productos_mysql->disponible=$row["disponible"] ==null?"":$row["disponible"];		$productos_mysql->estado=$row["estado"] ==null?"":$row["estado"];		$productos_mysql->presa=$row["presa"] ==null?"":$row["presa"];		$productos_mysql->familia=$row["familia"] ==null?"":$row["familia"];		$productos_mysql->unidad=$row["unidad"] ==null?"":$row["unidad"];		$productos_mysql->pre_costo=$row["pre_costo"] ==null?"":$row["pre_costo"];		$productos_mysql->colores=$row["colores"] ==null?"":$row["colores"];		$productos_mysql->nuevo=$row["nuevo"] ==null?"":$row["nuevo"];		$productos_mysql->stock=$row["stock"] ==null?"":$row["stock"];		$productos_mysql->cantidadac=$row["cantidadac"] ==null?"":$row["cantidadac"];		$productos_mysql->factor=$row["factor"] ==null?"":$row["factor"];		$productos_mysql->agrupa1=$row["agrupa1"] ==null?"":$row["agrupa1"];		$productos_mysql->agrupa2=$row["agrupa2"] ==null?"":$row["agrupa2"];		$productos_mysql->agrupa3=$row["agrupa3"] ==null?"":$row["agrupa3"];		$productos_mysql->cod_grupo=$row["cod_grupo"] ==null?"":$row["cod_grupo"];		$productos_mysql->cod_ins=$row["cod_ins"] ==null?"":$row["cod_ins"];		$productos_mysql->posicion=$row["posicion"] ==null?"":$row["posicion"];		$productos_mysql->img=$row["img"] ==null?"":$row["img"];		$productos_mysql->colorletra=$row["colorletra"] ==null?"":$row["colorletra"];		$productos_mysql->barcode=$row["barcode"] ==null?"":$row["barcode"];		$productos_mysql->ordenes=$row["ordenes"] ==null?"":$row["ordenes"];		$productos_mysql->ordenes1=$row["ordenes1"] ==null?"":$row["ordenes1"];		$productos_mysql->deconsumo=$row["deconsumo"] ==null?"":$row["deconsumo"];		$productos_mysql->imgnormal=$row["imgnormal"] ==null?"":$row["imgnormal"];		$productos_mysql->imgpresion=$row["imgpresion"] ==null?"":$row["imgpresion"];		$productos_mysql->imgsobre=$row["imgsobre"] ==null?"":$row["imgsobre"];		$productos_mysql->imgnodispo=$row["imgnodispo"] ==null?"":$row["imgnodispo"];		$productos_mysql->mgmnprod=$row["mgmnprod"] ==null?"":$row["mgmnprod"];		$productos_mysql->invisible=$row["invisible"] ==null?"":$row["invisible"];		$productos_mysql->codeqr=$row["codeqr"] ==null?"":$row["codeqr"];		$productos_mysql->f_vence=$row["f_vence"] ==null?"":$row["f_vence"];		$productos_mysql->nococina=$row["nococina"] ==null?"":$row["nococina"];		$productos_mysql->punto=$row["punto"] ==null?"":$row["punto"];		$productos_mysql->grupocmds=$row["grupocmds"] ==null?"":$row["grupocmds"];		$productos_mysql->grupocmds1=$row["grupocmds1"] ==null?"":$row["grupocmds1"];		$productos_mysql->indice=$row["indice"] ==null?"":$row["indice"];		$productos_mysql->dia=$row["dia"] ==null?"":$row["dia"];		$productos_mysql->imgnorblob=$row["imgnorblob"] ==null?"":$row["imgnorblob"];		$productos_mysql->imgpreblob=$row["imgpreblob"] ==null?"":$row["imgpreblob"];		$productos_mysql->imgsobblob=$row["imgsobblob"] ==null?"":$row["imgsobblob"];		$productos_mysql->imgnodblob=$row["imgnodblob"] ==null?"":$row["imgnodblob"];		$lista[]=$productos_mysql;};	return $lista;}	else{
            return null;
        }}function todo(){
        $consulta="select * from productos_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }function buscarXID($id){
        $consulta="select * from productos_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $productos_mysql=$this->rellenar($result);
        if($productos_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }}