<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from dettarjeta_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from dettarjeta_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $dettarjeta_mysql=$this->rellenar($result);
        if($dettarjeta_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }