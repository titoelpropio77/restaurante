<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from opproductos_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from opproductos_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $opproductos_mysql=$this->rellenar($result);
        if($opproductos_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }