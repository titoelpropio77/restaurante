<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from ven_gral_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from ven_gral_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $ven_gral_mysql=$this->rellenar($result);
        if($ven_gral_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }