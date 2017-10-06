<?php
Class Conexion {
      var $servername = "127.0.0.1";
   var $username = "root";
   var $password = "tito_root";
   var $dbname="posgourmet";
   public $conn;
   public $estado;
   
   public function ConexionDB(){
         try {
           
            $this->conn = new mysqli('localhost','posgourmet','root','posgourmet',3306);
            if($this->conn->connect_errno){
                $this->estado= false;
                  
                return $this->estado;
            }else{
                $this->estado= true;
                return $this->estado;
            }
          
        }
        catch(PDOException $e)
        {
            $this->estado= false;
                return $this->estado;
        }
   }

   public function Conexion(){
      
      $mysqli = new mysqli('localhost','posgourmet','root','posgourmet',3306);
      if ($mysqli->connect_errno){
         
         echo '<script> alert (" NO HAY CONEXION ");</script>';
         }
      $mysqli->set_charset('utf8');
      return $mysqli;
   }
   public function comillas_inteligentes($valor) {
      // Retirar las barras
      if (get_magic_quotes_gpc()) {
         $valor = stripslashes($valor);
      }
      // Colocar comillas si no es entero
      if (!is_numeric($valor)) {
         $valor = "'" . $this->mysqli->real_escape_string($valor) . "'";
      }
      return $valor;
   }


   function transacion(){
       $this->conn->autocommit(false);
   }
   function manipular($query){
        if ($this->conn->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }
   }
   function consulta($sql){
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
   }
   function cerrarConexion(){
       try {
           $close = $conn->close();
       } catch (Exception $ex) {
           throw $ex;
       }
   }
   function commit(){
       $this->conn->commit();
   }
   function rollback(){
       $this->conn->rollback();
   }
   function closed(){
  mysql_close($conn);
   }
}