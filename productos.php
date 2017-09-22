<?php
require("class/personal.php");
require("class/paises.php");
include "header.php";
?>

<style type="text/css">
body{
  background-color:#FBFFFF;
}
.table-fixed{
  width: 100%;
  background-color: #f3f3f3;
  tbody{
    height:200px;
    overflow-y:auto;
    width: 100%;
    }
  thead,tbody,tr,td,th{
    display:block;
  }
  tbody{
    td{
      float:left;
    }
  }
  thead {
    tr{
      th{
        float:left;
       background-color: #f39c12;
       border-color:#e67e22;
      }
    }
  }
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

<div class="modal fade in" id="myModaledit" role="dialog" data-backdrop="static">
    <div class="modal-dialog">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar  producto</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post">
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Nombre</span>
                        <input type="text" class="form-control" name="nom_prod" id="nom_prod" placeholder="Nombre del elemento terminado">
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Estado</span>            
                        <select class="form-control" id="estado" name="estado">
                            <option value="0">-- seleccionar estado --</option>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INCTIVO</option>
                        </select>
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Cantidad</span>            
                        <input type="number" step="0.01" class="form-control" name="cantidad" id="cantidad" placeholder="0,.00 cantidad">
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Unidad</span>            
                        <input type="number" step="0.01" class="form-control" name="unid" id="unid" placeholder="0,.00 Unidad">
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">precio</span>            
                        <input type="number" class="form-control" name="pre_venta" id="pre_venta" placeholder="0.00 precio">
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Grupo</span>            
                        <select class="form-control" name="grupo">
                            <option value="0">seleccione categoria</option>
                            <?php
                            $objPaises = new Paises();
                            $paises = $objPaises->paises();
                            foreach ($paises as $pais) {
                                ?>
                                <option value="<?php echo $pais["GRUPO"]; ?>"><?php echo $pais["NOM_GRUPO"]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">disponible</span>            
                        <select class="form-control" id="disponible" name="disponible">
                            <option value="SI">-- disponible --</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>                    
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Sujiere</span>            
                        <select class="form-control" id="sujiere" name="sujiere">
                            <option value="">-- Sujiere --</option>
                            <option value="X">SI</option>
                            <option value="">NO</option>
                        </select>
                    </div>                                    
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Color</span>
                        <input type='color' id='colores' name='colores' type='color' value='<?php if(isset($_POST['submit'])){echo $colores;} ?>' />
                    </div>                    
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Codigo de barra</span>
                        <input type="text" class="form-control" name="barcode" id="barcode" placeholder="codigo de barra">
                    </div>                    
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Tipo de producto</span>            
                        <select class="form-control" id="familia" name="familia">
                            <option value="N">-- Tipo de producto --</option>
                            <option value="N">NORMAL</option>
                            <option value="C">CONSUMO</option>
                            <option value="T">TIEMPO-HORA</option>
                            <option value="P">COMPUESTO</option>                            
                        </select>
                    </div>                                    
                     <div class="modal-footer">
                        <button type="submit" name="bts" class="btn btn-success">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
                    </div>
                </form>
            </div>
        </div>      
    </div>
 </div>




<div class="modal fade in" id="myModal" role="dialog" data-backdrop="static">
    <div class="modal-dialog">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registro de Nuevo producto</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post">
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Nombre</span>
                        <input type="text" class="form-control" name="nom_prod" id="nom_prod" placeholder="Nombre del elemento terminado">
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Estado</span>            
                        <select class="form-control" id="estado" name="estado">
                            <option value="0">-- seleccionar estado --</option>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INCTIVO</option>
                        </select>
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Cantidad</span>            
                        <input type="number" step="0.01" class="form-control" name="cantidad" id="cantidad" placeholder="0,.00 cantidad">
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Unidad</span>            
                        <input type="number" step="0.01" class="form-control" name="unid" id="unid" placeholder="0,.00 Unidad">
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">precio</span>            
                        <input type="number" class="form-control" name="pre_venta" id="pre_venta" placeholder="0.00 precio">
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Grupo</span>                                    
                        <select class="form-control" name="grupo">
                            <option value="0">seleccione categoria</option>
                            <?php
                            $objPaises = new Paises();
                            $paises = $objPaises->paises();
                            foreach ($paises as $pais) {
                                ?>
                                <option value="<?php echo $pais["GRUPO"]; ?>"><?php echo $pais["NOM_GRUPO"]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">disponible</span>            
                        <select class="form-control" id="disponible" name="disponible">
                            <option value="SI">-- disponible --</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>                    
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Sujiere</span>            
                        <select class="form-control" id="sujiere" name="sujiere">
                            <option value="">-- Sujiere --</option>
                            <option value="X">SI</option>
                            <option value="">NO</option>
                        </select>
                    </div>                                    
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Color</span>
                        <input type='color' id='colores' name='colores' type='color' value='<?php if(isset($_POST['submit'])){echo $colores;} ?>' />
                    </div>                    
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Codigo de barra</span>
                        <input type="text" class="form-control" name="barcode" id="barcode" placeholder="codigo de barra">
                    </div>                    
                    <div class="input-group col-xs-6">
                        <span class="input-group-addon">Tipo de producto</span>            
                        <select class="form-control" id="familia" name="familia">
                            <option value="N">-- Tipo de producto --</option>
                            <option value="N">NORMAL</option>
                            <option value="C">CONSUMO</option>
                            <option value="T">TIEMPO-HORA</option>
                            <option value="P">COMPUESTO</option>                            
                        </select>
                    </div>                                    
                     <div class="modal-footer">
                        <button type="submit" name="bts" class="btn btn-success">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
                    </div>
                </form>
            </div>
        </div>      
    </div>
 </div>
<p>
     <!--<a href="create.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Producto</a><br/>-->
     <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Agregar Producto</button>
     <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Agregar Categorias</button>
</p>
<table id="ghatable" class="display table table-bordered table-stripe table-hover table-responsive" cellspacing="0" width="100%"> <!--jquery.dataTables.min.js -->
     <thead>
          
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
               <th>Edita</th>
               <th>Elimina</th>
         
     </thead>
     <tbody>
          <?php
          $objpersonal = new Personal();
          $personal = $objpersonal->personal();
          if(sizeof($personal) > 0){
               foreach ($personal as $row){
                    ?>                    
                    <tr>
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
                         <td>
                             <button class="btn btn-info" title="EDITAR PRODUCTO">EDITAR</button>
                              <!-- <button type="button" class="glyphicon glyphicon-pencil" aria-hidden="true"" data-toggle="modal" data-target="#myModaledit"></button>-->
                         </td>
                         <td>
                              <a onclick="return confirm('Desea eliminar el registro')" href="delete.php?d=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Elimina</a>
                              <!--<button type="button" class="glyphicon glyphicon-trash" aria-hidden="true" onclick="return confirm('Desea eliminar el registro')" onclick="return confirm('Desea eliminar el registro')" href="delete.php?d=<?php echo $row['id'] ?>" ></button>                              -->
                         </td>
                        
                         
                    </tr>
                    <?php
               }
          }
          ?>
     </tbody>
</table>      
<?php
include "footer.php";
?>
