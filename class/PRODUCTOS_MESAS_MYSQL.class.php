<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from productos_mesas_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from productos_mesas_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $productos_mesas_mysql=$this->rellenar($result);
        if($productos_mesas_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }