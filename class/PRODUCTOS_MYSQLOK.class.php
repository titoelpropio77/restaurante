<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from productos_mysqlok";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from productos_mysqlok where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $productos_mysqlok=$this->rellenar($result);
        if($productos_mysqlok==null){
            return null;
        }
        return $this->rellenar($result);
    }