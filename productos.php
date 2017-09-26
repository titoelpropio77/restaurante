<?php
require("class/personal.php");
require("class/paises.php");
require("class/menugrupo.php");

include "header.php";
?>

<style type="text/css">
body{
  background-color:#FBFFFF;
}
</style>
<!-- Modal -->
<?php
if(isset($_POST['bts'])){
  if($_POST['nom_prod']!=null && $_POST['estado']!=null && $_POST['cantidad']!=null  && $_POST['unid']!=null && $_POST['pre_venta']!=null && $_POST['grupo']!=null && $_POST['disponible']!=null){
    $paginas = new Personal();
    $paginas->add();
    ?>
    <p></p>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Listo!</strong> Registro guardado con exito... <a href="productos.php">Listar productos</a>.
    </div>
    <?php
  } else{
    ?>
    <p></p>
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Error!</strong> Formulario vacio.
    </div>
    <?php
  }
}
?>

<!--//*****************************************************************-->
<!--// EDITAR PRODUCTOS echo '<script type="text/javascript">alert(\'Lo estamos redireccionando\');</script>';  echo '<script>alert (" Ha respondido '.$nm.' respuestas afirmativas");</script>';-->
<!--///***************************************************************** -->


<?php 
include "modal/modalProducto.php";
include "modal/modalMenuGrupo.php";
   ?> 

<p>
  <?php 
include "alerts/cargando.php";
   ?>
     <!--<a href="create.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Producto</a><br/>-->
      <div class="panel panel-info" style="box-shadow: 0 0 35px 8px black;">
      <div class="panel-heading">
        <ul class="nav nav-tabs">
  <li class="active"><a href="#"><b>PRODUCTO</b></a></li>
  <li><a href="menugrupo.php"><b>GRUPO</b></a></li>
  <li><a href="#"><b>INVENTARIO Y PRODUCCION</b></a></li>
  <li><a href="#"><b>CATEGORIA</b></a></li>
</ul>
</div>
      <div class="panel-body">
     <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Agregar Producto</button>
     <!-- <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Agregar Categorias</button> -->
</p>

<table id="ghatable" class="table table-bordered table-striped dataTable no-footer" > <!--jquery.dataTables.min.js -->
     <thead style="text-align: center">
          
               <th>ID</th>
               <th>Codigo</th>
               <th>Nombre</th>
               <th>Cantidad</th>
               <th>Unidad</th>
               <th>Precio</th>
               <th>NroCate</th>
               <th>Categoria</th>
               <th>Estado</th>
               <th>Sugiere</th>
               <th>Color</th>
               <th>Editar</th>
               <th>Eliminar</th>
         
     </thead>
     <tbody>
          <?php
        
          $objpersonal = new Personal();
          $personal = $objpersonal->personal();
          if (!$personal) {
            echo "no hubo conexion";
          }
          if(sizeof($personal) > 0){
               foreach ($personal as $row){
                    ?>                    
                    <tr style="text-align: center">
                         <td><?php echo $row['id'] ?></td>
                         <td><?php echo $row['cod_prod'] ?></td>
                         <td><?php echo $row['nom_prod'] ?></td>
                         <td><?php echo $row['cantidad'] ?></td>
                         <td><?php echo $row['unid'] ?></td>
                         <td><?php echo $row['pre_venta'] ?></td>
                         <td><?php echo $row['grupo'] ?></td>                         
                         <td><?php echo $row['nom_grupo'] ?></td>
                         <td><?php echo $row['estado'] ?></td>
                         <td><?php echo $row['presa'] ?></td>
                         <td><button style="background:  <?php echo $row['colores']."; border-color:".$row['colores'] ; ?> ;    width: 100%;  height: 26px;"></button></td>
                         <td>
                             <button onclick="cargarDatos(<?php echo $row['id'] ?>)" class="btn btn-info" title="EDITAR PRODUCTO" data-toggle="modal" data-target="#myModaledit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                              <!-- <button type="button" class="glyphicon glyphicon-pencil" aria-hidden="true"" data-toggle="modal" data-target="#myModaledit"></button>-->
                         </td>
                         <td>
                              <!-- <a onclick="return confirm('Desea eliminar el registro')" href="delete.php?d=<?php //echo $row['id'] ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Elimina</a> -->
                               <button onclick="cargarDatos(<?php echo $row['id'] ?>)" class="btn btn-danger" title="ELIMINAR PRODUCTO" data-toggle="modal" data-target="#myModaledit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                              <!--<button type="button" class="glyphicon glyphicon-trash" aria-hidden="true" onclick="return confirm('Desea eliminar el registro')" onclick="return confirm('Desea eliminar el registro')" href="delete.php?d=<?php echo $row['id'] ?>" ></button>                              -->
                         </td>
                        
                         
                    </tr>
                    <?php
               }
          }
          ?>
     </tbody>
</table>   
</div>
    </div>
    <script src="js/producto.js"></script>
    <script src="js/menuGrupo.js"></script>
 
<?php
include "footer.php";
?>
