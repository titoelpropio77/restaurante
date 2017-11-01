<?php


include "header.php";
?>

<style type="text/css">
body{
  background-color:#FBFFFF;
}
</style>
<!-- Modal -->

<!--//*****************************************************************-->
<!--// EDITAR PRODUCTOS echo '<script type="text/javascript">alert(\'Lo estamos redireccionando\');</script>';  echo '<script>alert (" Ha respondido '.$nm.' respuestas afirmativas");</script>';-->
<!--///***************************************************************** -->


<?php 
include "modal/modalProducto.php";
include "modal/modalGrupo.php";
include "modal/modalInsumoProducto.php";
include "modal/modalMenuGrupo.php";
include "alerts/cargando.php";

   ?> 


     <!--<a href="create.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Producto</a><br/>-->
      <div class="panel panel-info" style="box-shadow: 0 0 35px 8px black;">
      <div class="panel-heading">
        <ul class="nav nav-tabs">
  <li class="active"><a href="#"><b>PRODUCTO</b></a></li>
  <li><a href="inventario.php"><b>INVENTARIO Y PRODUCCION</b></a></li>
</ul>
</div>
      <div class="panel-body">
     <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Agregar Producto</button>
     <!-- <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Agregar Categorias</button> -->
</p>
<div class="row">

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="    overflow-x: scroll;">
<table id="ghatable" class="table table-bordered table-hover table-responsive table-condensed dataTable" > <!--jquery.dataTables.min.js -->
     <thead style="text-align: center">
          <tr>
               <th>COD</th>
               <th style="padding-right: 0;">NOMBRE</th>
               <th>Cant</th>
               <th>Unidad</th>
               <th>Precio</th>
               <th>Categoria</th>
               <th>Estado</th>
               <th>Color</th>
               <th>Acción</th>
               <th>Agregar Receta</th>
               <th>Grupo</th>
               <!-- <th>Color</th> -->
               <!-- <th>Operacion</th> -->
            
  
         </tr>
     </thead>
     <tbody id="datos">
         
     </tbody>
</table>   
</div>
</div>
</div>

    </div>
 
<?php
include "footer.php";
//include "modal/modalInsumoProducto.php";





?>
    <script src="js/menuGrupo.js"></script>

    <script src="js/producto.js"></script>
    <script src="js/productoGrupo.js"></script>
 
    <script src="js/insumoProducto.js"></script>
    <script src="js/grupo.js"></script>
    <script src="js/plugins/adminlte.js"></script>
    <script type="text/javascript">
  
    </script>
<!-- ESTA CONSULTA ME GENERA LOS PRODUCTOS QUE PERTENECEN A UN GRUPO -->
<!--     SELECT (productos_mysql.cantidad*productos_mysql.unid*relprogru_mysql.FACTOR) as cantidad,  grupos_mysql.NOM_GRUPO FROM relprogru_mysql,grupos_mysql,productos_mysql where relprogru_mysql.COD_PROD=productos_mysql.cod_prod and relprogru_mysql.COD_GRUPO=grupos_mysql.COD_GRUPO and productos_mysql.cod_prod=2 -->