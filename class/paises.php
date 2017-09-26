<?php
require_once 'Conexion.php';
class Paises extends Conexion {
    public $mysqli;
    public $data;
    public function __construct() {
        $this->mysqli = parent::Conexion();
        $this->data = array();
    }
    //*****************************************************************
    // LISTAMOS DE PAISES
    //*****************************************************************
    public function paises(){
         $con = new Conexion();
        // if (!$con->estado) {
        //    // echo '<script> alert (" NO HAY CONEXION ");</script>';
    
        // }
        $resultado = $this->mysqli->query("SELECT ID, GRUPO, NOM_GRUPO FROM menugrupo_mysql");
        while( $fila = $resultado->fetch_assoc() ){
            $data[] = $fila;
        }
        if (isset($data)) {
            return $data; 
        }         
    }
}
?>