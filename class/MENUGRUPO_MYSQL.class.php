<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from menugrupo_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from menugrupo_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $menugrupo_mysql=$this->rellenar($result);
        if($menugrupo_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }