<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from det_prov_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from det_prov_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $det_prov_mysql=$this->rellenar($result);
        if($det_prov_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }