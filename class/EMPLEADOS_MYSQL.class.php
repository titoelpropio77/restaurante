<?php
        if ($resultado->num_rows > 0) {
            $lista=array();
            while($row = $resultado->fetch_assoc()) {
            return null;
        }}
        $consulta="select * from empleados_mysql";
        $result=$this->CON->consulta($consulta);
        return $this->rellenar($result);
    }
        $consulta="select * from empleados_mysql where ID=".$id;
        $result=$this->CON->consulta($consulta);
        $empleados_mysql=$this->rellenar($result);
        if($empleados_mysql==null){
            return null;
        }
        return $this->rellenar($result);
    }