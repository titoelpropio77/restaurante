<?php
require("class/Conexion.php");

require("class/personal.php");
require("class/paises.php");
require("class/menugrupo.php");
require("class/PRODUCTOS_MYSQL.class.php");
require("class/INSUMOS_MYSQL.class.php");
require("class/GRUPOS_MYSQL.class.php");
require("class/RELPROINS_MYSQL.class.php");
require("class/RELPROGRU_MYSQL.class.php");
require("CONTROLADORES/insumoProductoController.php");
require("CONTROLADORES/productoGrupoController.php");
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
if(isset($_POST['btnGuardarInsumoProducto'])){
  if(guardarInsumoProducto()){  
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

if(isset($_POST['btnEliminarInsPro'])){
  if(EliminarInsumoProducto()){  
    ?>
    <p></p>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Listo!</strong> Registro Eliminado con exito... <a href="productos.php">Listar productos</a>.
    </div>
    <?php
  } else{
    ?>
    <p></p>
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Error!</strong> INTENTE NUEVAMENTE
    </div>
    <?php
  }
}

if(isset($_POST['bnModificarCantidadRelPro'])){
  if(modificarInsumoProducto()){  
    ?>
    <p></p>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Listo!</strong> Registro Modificado con exito... <a href="productos.php">Listar productos</a>.
    </div>
    <?php
  } else{
    ?>
    <p></p>
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Error!</strong> INTENTE NUEVAMENTE
    </div>
    <?php
  }
}

if(isset($_POST['btnEliminarPro'])){
    $error = "";
$con= new Conexion();
$conexion= $con->ConexionDB();
$Prod=new PRODUCTOS_MYSQL($con);
$ID=$_POST['idProductoEliminar'];
$eliminar=$Prod->eliminar($ID);
  if($eliminar){  
    ?>
    <p></p>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Listo!</strong> Registro Modificado con exito... <a href="productos.php">Listar productos</a>.
    </div>
    <?php
  } else{
    ?>
    <p></p>
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Error!</strong> INTENTE NUEVAMENTE
    </div>
    <?php
  }
}
if(isset($_POST['btnGuardarGrupoProducto'])){
   
  if(guardarProductoGrupo()){  
    ?>
    <p></p>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Listo!</strong> Registro Modificado con exito... <a href="productos.php">Listar productos</a>.
    </div>
    <?php
  } else{
    ?>
    <p></p>
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Error!</strong> INTENTE NUEVAMENTE
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
  <li><a href="inventario.php"><b>INVENTARIO Y PRODUCCION</b></a></li>
</ul>
</div>
      <div class="panel-body">
     <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Agregar Producto</button>
     <!-- <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Agregar Categorias</button> -->
</p>

<table id="ghatable" class="ghatable table table-bordered table-striped dataTable no-footer" > <!--jquery.dataTables.min.js -->
     <thead style="text-align: center">
          
               <th>Codigo</th>
               <th>Nombre</th>
               <th>Cantidad</th>
               <th>Unidad</th>
               <th>Precio</th>
               <th>Categoria</th>
               <th>Estado</th>
               <th>Color</th>
              
               <th>Operacion</th>
               <th>Agregar Receta</th>
               <th>Grupo</th>
         
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
                         <td><?php echo $row['cod_prod'] ?></td>
                         <td><?php echo $row['nom_prod'] ?></td>
                         <td><?php echo $row['cantidad'] ?></td>
                         <td><?php echo $row['unid'] ?></td>
                         <td><?php echo $row['pre_venta'] ?></td>
                         <td><?php echo $row['nom_grupo'] ?></td>
                         <td><?php echo $row['estado'] ?></td>
                         <td><button style="background:  <?php echo $row['colores']."; border-color:".$row['colores'] ; ?> ;    width: 100%;  height: 26px;"></button></td>
                         <td>
                             <button onclick="cargarDatosProducto(<?php echo $row['id'] ?>)" class="btn btn-info" title="EDITAR PRODUCTO" data-toggle="modal" data-target="#myModaledit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                              <!-- <button type="button" class="glyphicon glyphicon-pencil" aria-hidden="true"" data-toggle="modal" data-target="#myModaledit"></button>-->
                              <!-- <a onclick="return confirm('Desea eliminar el registro')" href="delete.php?d=<?php //echo $row['id'] ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Elimina</a> -->
                               <button onclick="cargarIdEliminar(this)" nombre='<?php echo $row['nom_prod']; ?>' id=<?php  echo $row['id'] ; ?> class="btn btn-danger" title="ELIMINAR PRODUCTO" data-toggle="modal" data-target="#ModalEliminarProducto"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                     
                         </td>
                        
                         <td><?php 
                             $con = new Conexion();
                $lista=array();
                $conexcion = $con->ConexionDB() ;
                $productoinsumo=new RELPROINS_MYSQL($con);
                  $lista=$productoinsumo->buscarXID($row['id']);

                  if (count($lista)) {
                        echo "<div class='box box-danger direct-chat direct-chat-warning collapsed-box' id='' ><button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-plus'></i></button>
                        
             <div class='box-body' style='display: none;'>
              <form   method='POST'> 
                 <input type='hidden' value=". $row['id'] ." name='idProducto' >
                  <button class='btn btn-success' name='btnInsumoProducto' >AGREGAR INSUMO</button>
                  </form>
             <table class='table-striped table-bordered table-condensed '>
                <thead><th><CENTER>INSUMO</CENTER></th><th><CENTER>CANTIDAD</CENTER></th><th><CENTER>OPERACION</CENTER></th></button>
               
                 </thead>
                <tbody id=''>";
            
              

                for ($i=0; $i <count($lista) ; $i++) { 
                  echo "<tr>
                  <td>".$lista[$i]->NOM_INSUMO."</td>
                  <td>".$lista[$i]->CANTIDAD."</td>
                  <td><button  onclick='CargarDatosModal(this)' idrelproins=".$lista[$i]->ID." class='btn btn-warning btn-xs' data-toggle='modal' cantidad=".$lista[$i]->CANTIDAD." data-target='#ModalModificarCantidadInsumo' nombre='".$lista[$i]->NOM_INSUMO."'    >EDITAR</button>
                      <button idrelproinsE=".$lista[$i]->ID."  onclick='CargarIdEliminarInsumo(this)' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#ModalEliminarInsumoProducto' nombreE='".$lista[$i]->NOM_INSUMO."' >Eliminar</button>
                  </td>
                  </tr>";
                }
                echo "</tbody>
             </table> </div>  </div>"  ;
                  }
                       else{
                        echo "<button class='btn btn-success ' data-toggle='modal' data-target='#ModalaAgregarInsumo' onclick='colocarId(". $row['id'] .")'>AGREGAR INSUMO</button>";
                       }  

                          ?></td>
                          <td>
                          <?php
                       $con = new Conexion();
                       $lista=array();
                       $conexcion = $con->ConexionDB() ;
                       $productogrupo=new RELPROGRU_MYSQL($con);
                       $lista=$productogrupo->buscarXID($row['id']);

                       if (count($lista)) {
                         echo "<div class='box box-danger direct-chat direct-chat-warning collapsed-box' id='' ><button type='button' class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-plus'></i></button>
                          <form    method='POST'> 
             <div class='box-body' style='display: none;'>
             <input type='hidden' value=". $row['id'] ." name='producto' >
                  <button class='btn btn-success btn-xs' name='btnGrupo' >INSETAR A GRUPO</button>
                       </form>
             <table class=''>
                <thead><th><CENTER>GRUPO</CENTER></th><th><CENTER>FACTOR</CENTER></th><th><CENTER>OPERACION</CENTER></th></button>
               
                 
                 </thead>
                <tbody id=''>";
                          foreach ($lista as $key => $value) {
                           echo "<tr>
                  <td>".$value->NOM_PROD."</td>
                  <td>".$value->FACTOR."</td>
                  <td><button  onclick='CargarDatosModal(this)' class='btn btn-warning btn-xs' data-toggle='modal'  data-target='#ModalModificarCantidadInsumo'    >EDITAR</button>
                      <button  onclick='CargarIdEliminarInsumo(this)' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#ModalEliminarInsumoProducto' >Eliminar</button>
                  </td>
                  </tr>";
                }
                echo "</tbody>
             </table> </div>  </div>"  ;
                         }
                         else{
                          echo "
                          <form    method='POST'> 
                          <input name='producto' type='hidden' value='".$row['id']."'>
                          <button class='btn btn-info' name='btnGrupo' id='btnGrupo".$row['id']."'>INSERTAR A GRUPO</button>
                            </form>
                          ";
                         }
                          ?>
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
include "modal/modalGrupo.php";
include "modal/modalInsumoProducto.php";





?>
    <script src="js/insumoProducto.js"></script>
    <script src="js/grupo.js"></script>
<?php 

if(isset($_POST['btnGuardarGrupo'])  ){
    $error = "";
$con= new Conexion();
$conexion= $con->ConexionDB();
$grupo=new GRUPOS_MYSQL($con);
$nombre=$_POST['nombre'];
$id=$_POST['idProducto'];
$grupo->contructor('',$nombre,0,0,0);
$insertar=$grupo->insertar();
$modificar=$grupo->modificar($insertar);
echo "<script>
$('#btnGrupo".$id."').click();
</script>
";
  if($insertar){  
    ?>
    <p></p>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Listo!</strong> Registro Modificado con exito... <a href="productos.php">Listar productos</a>.
    </div>
    <?php
  } else{
    ?>
    <p></p>
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Error!</strong> INTENTE NUEVAMENTE
    </div>
    <?php
  }
}

 ?>