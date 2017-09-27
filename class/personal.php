<?php
require_once 'Conexion.php';
class Personal extends Conexion {
    public $mysqli;
    public $data;
    public function __construct() {
        $this->mysqli = parent::Conexion();
        $this->data = array();
    }
    //*****************************************************************
    // LISTAMOS PRODUCTOS
    //*****************************************************************
    public function personal(){

        // $con = new Conexion();
        // if (!$con->estado) {
        //    echo '<script> alert (" NO HAY CONEXION ");</script>';
    
        // }
        $resultado = $this->mysqli->query("SELECT
            productos_mysql.id,
            productos_mysql.cod_prod,
            productos_mysql.nom_prod,
            productos_mysql.cantidad,
            productos_mysql.unid,
            productos_mysql.pre_venta,
            productos_mysql.estado,
            productos_mysql.grupo,
            productos_mysql.presa,
            productos_mysql.colores,            
            menugrupo_mysql.nom_grupo
            FROM
            productos_mysql
            INNER JOIN menugrupo_mysql ON productos_mysql.grupo = menugrupo_mysql.grupo 
            ");
        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }
        if (isset($data)) {
            return $data; 
        }         
    }
    //*****************************************************************
    // AGREGAR PRODUCTOS echo '<script type="text/javascript">alert(\'Lo estamos redireccionando\');</script>';  echo '<script>alert (" Ha respondido '.$nm.' respuestas afirmativas");</script>';
    //*****************************************************************
    public function add() {                 
        $consultac = sprintf("SELECT MAX(cod_prod)+1 as vvcod_prod FROM productos_mysql LIMIT 1");        
        $resultado2=$this->mysqli->query($consultac); 
        //echo $resultado2->fetch_assoc()['vvcod_prod'];    
        $vnom_prod   = $_POST['nom_prod'];
        $vestado     = $_POST['estado'];
        $vcantidad   = $_POST['cantidad'];
        $vunid       = $_POST['unid'];
        $vpre_venta  = $_POST['pre_venta'];
        $vgrupo      = $_POST['grupo'];                                                                          
        $vdisponible = $_POST['disponible'];                                                                          
        $vsujiere    = $_POST['sujiere'];                                                                          
        $vcolores    = $_POST['colores'];                                                                          
        $vbarcode    = $_POST['barcode'];          
        $vfamilia    = $_POST['familia'];          
        //echo '<script>alert (" Ha respondido '.$vnom_prod.' respuestas afirmativas");</script>';       
        $consulta = sprintf("INSERT INTO productos_mysql (id, nom_prod, estado, cantidad, unid, pre_venta, grupo, disponible, presa, colores, barcode, familia) values(null, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s);",          
        
            parent::comillas_inteligentes($vnom_prod), 
            parent::comillas_inteligentes($vestado), 
            parent::comillas_inteligentes($vcantidad),
            parent::comillas_inteligentes($vunid),
            parent::comillas_inteligentes($vpre_venta),
            parent::comillas_inteligentes($vgrupo),
            parent::comillas_inteligentes($vdisponible),
            parent::comillas_inteligentes($vsujiere),            
            parent::comillas_inteligentes($vcolores),
            parent::comillas_inteligentes($vbarcode),
            parent::comillas_inteligentes($vfamilia)                            
            );
         //echo $consulta; 
        $guardo=  $this->mysqli->query($consulta);     
        if($guardo){
            //echo 'guardo';
            $consulta="select LAST_INSERT_ID() as id";
            $resultado1=$this->mysqli->query($consulta); 
            //echo $resultado1->fetch_assoc()['id'];                
        }else{
            echo 'no guardo';
        }
    }    
    //*****************************************************************
    // MODIFICAR PRODUCTOS parent::comillas_inteligentes($_POST['id'])
    //*****************************************************************
    public function update() {
        $consulta = sprintf(
            "UPDATE productos_mysql SET
            nom_prod = %s,
            estado = %s,
            cantidad = %s,
            unid = %s,
            pre_venta = %s,            
            grupo = %s            
            WHERE
            id = %s;", 
            parent::comillas_inteligentes($_POST['nm']), 
            parent::comillas_inteligentes($_POST['gd']),
            parent::comillas_inteligentes($_POST['tl']),
            parent::comillas_inteligentes($_POST['ar']),
            parent::comillas_inteligentes($_POST['email']),
            parent::comillas_inteligentes($_POST['pais']),
            parent::comillas_inteligentes($_POST['id'])
            );
        $this->mysqli->query($consulta);
        echo "<script type='text/javascript'>window.location='productos.php';</script>";
    }
    //*****************************************************************
    // ELIMINAR PRODUCTO
    //*****************************************************************
    public function delete($id) {
        $query = sprintf(
            "DELETE FROM productos_mysql WHERE id = %s;", 
            parent::comillas_inteligentes($id)
            );
        $this->mysqli->query($query);
        header("Location: productos.php");
    }
    //*****************************************************************
    // PRODUCTOS POR ID
    //*****************************************************************
    public function personalPorId($id){                                                                    
        $consulta = sprintf("SELECT  
            productos_mysql.id,
            productos_mysql.cod_prod,
            productos_mysql.nom_prod,
            productos_mysql.cantidad,
            productos_mysql.unid,
            productos_mysql.pre_venta,
            productos_mysql.estado,
            menugrupo_mysql.grupo,
            menugrupo_mysql.nom_grupo
            FROM
            productos_mysql
            INNER JOIN menugrupo_mysql ON productos_mysql.grupo = menugrupo_mysql.grupo  
            WHERE
            productos_mysql.id = %s", 
            parent::comillas_inteligentes($id)
            );
        $resultado = $this->mysqli->query($consulta);
        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }
        if (isset($data)) {
            return $data; 
        }
    }
}
?>