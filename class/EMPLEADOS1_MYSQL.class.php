<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from empleados1_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from empleados1_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $empleados1_mysql=$this->rellenar($result);
        if($empleados1_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }