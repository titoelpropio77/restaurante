<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from productos_tmp_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from productos_tmp_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $productos_tmp_mysql=$this->rellenar($result);
        if($productos_tmp_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }