<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from kardexprod_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from kardexprod_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $kardexprod_mysql=$this->rellenar($result);
        if($kardexprod_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }