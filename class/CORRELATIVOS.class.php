<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from correlativos";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from correlativos where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $correlativos=$this->rellenar($result);
        if($correlativos==null){
            return null;
        }
        return $this->rellenar($result);
    }