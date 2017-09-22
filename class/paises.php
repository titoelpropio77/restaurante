<?php
require_once 'conexion.php';
class Paises extends Conexion {
    public $mysqli;
    public $data;
    public function __construct() {
        $this->mysqli = parent::conectar();
        $this->data = array();
    }
    //*****************************************************************
    // LISTAMOS DE PAISES
    //*****************************************************************
    public function paises(){
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