
<div class="modal fade in" id="ModalaAgregarInsumo" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>AGREGAR INSUMO AL PRODUCTO</b></h4>

            </div>
            <div class="modal-body">
     <form action="" id="formulario" enctype="multipart/form-data" method="POST"> 
      <input type="hidden" id="idProducto" name="producto">         
<table id="ghatable" class="ghatable display table table-bordered table-stripe table-hover table-responsive" cellspacing="0" width="100%"> <!--jquery.dataTables.min.js -->
     
     <thead style="text-align: center">
          
               <th>CODIGO</th>
               <th>NOMBRE</th>
               <th>MEDIDA</th>
               <th>STOCK MINIMO</th>
               <th>STOCK ACTUAL</th>
               <th>OPERACION</th>
               <th>SELECCIONAR INSUMO</th>
               <th>CANTIDAD</th>

           
     </thead>
     <tbody>
         <?php
                     $con = new Conexion();
                $conexcion = $con->ConexionDB() ;
                $insumos = new INSUMOS_MYSQL($con);
                 $listainsumo = $insumos->todo();
                for ($i=0; $i <count($listainsumo) ; $i++) { 
                  
                  echo '<tr  style="  text-align: center;">
                  <td>'.$listainsumo[$i]->COD_INS.'
                  <td>'.$listainsumo[$i]->NOM_INSUMO.'
                  <td>'.$listainsumo[$i]->MEDIDA.'
                  <td>'.$listainsumo[$i]->STOCK_MIN.'
                  <td>'.$listainsumo[$i]->STOCK_ACT.'
                  <td><button onclick="cargarDatos('.$listainsumo[$i]->ID.')"  class="btn btn-info" title="EDITAR PRODUCTO" data-toggle="modal" data-target="#ModalModificarGrupo"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                   <td><input type="checkbox" name="insumo[]" onclick=habilitarInput('.$i.') value='.$listainsumo[$i]->COD_INS.' />
                   <td><input type="number" name="cantidad[]" id="cantidadInsumo'.$i.'" habilitado="true" disabled="true" class="form-control input-sm">
                  </tr>';
                }
               
               
                ?>
     </tbody>
</table>  
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnGuardar" name="btnGuardarInsumoProducto" class="btn btn-success" onclick="">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
</form> 
            </div>
            </form>
        </div>
    </div>      
</div>






<div class="modal fade in" id="ModalaReAgregarInsumo" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>AGREGAR INSUMO AL PRODUCTO</b></h4>

            </div>
            <div class="modal-body">
     <form action="" id="formulario" enctype="multipart/form-data" method="POST"> 
<?php 
 if(isset($_POST['btnInsumoProducto'])){
  $con= new Conexion();
$conexion= $con->ConexionDB();
$insProd=new INSUMOS_MYSQL($con);
$idProducto=$_POST['idProducto'];

$listainsumo=$insProd->listar($idProducto);
              // $listainsumo=listarInsumoProducto();// esta funcion lista en el modal insumo produc
              echo '<input type="hidden" id="" value='.$_POST['idProducto'].' name="producto">';
 ?>        
<table id="ghatable" class="ghatable display table table-bordered table-stripe table-hover table-responsive" cellspacing="0" width="100%"> <!--jquery.dataTables.min.js -->
     
     <thead style="text-align: center">
          
               <th>CODIGO</th>
               <th>NOMBRE</th>
               <th>MEDIDA</th>
               <th>STOCK MINIMO</th>
               <th>STOCK ACTUAL</th>
               <th>OPERACION</th>
               <th>SELECCIONAR INSUMO</th>
               <th>CANTIDAD</th>

           
     </thead>
     <tbody>
         <?php
            
                for ($i=0; $i <count($listainsumo) ; $i++) { 
                  
                  echo '<tr  style="  text-align: center;">
                  <td>'.$listainsumo[$i]->COD_INS.'
                  <td>'.$listainsumo[$i]->NOM_INSUMO.'
                  <td>'.$listainsumo[$i]->MEDIDA.'
                  <td>'.$listainsumo[$i]->STOCK_MIN.'
                  <td>'.$listainsumo[$i]->STOCK_ACT.'
                  <td><button onclick="cargarDatos('.$listainsumo[$i]->ID.')"  class="btn btn-info" title="EDITAR PRODUCTO" data-toggle="modal" data-target="#ModalModificarGrupo"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                   <td><input type="checkbox" name="insumo[]" onclick=habilitarInputA('.$i.') value='.$listainsumo[$i]->COD_INS.' />
                   <td><input type="number" name="cantidad[]" id="cantidadInsumoA'.$i.'" habilitado="true" disabled="true" class="form-control input-sm">
                  </tr>';
                }
               
                ?>
     </tbody>
</table>  
<?php 

 echo '<script> $("#ModalaReAgregarInsumo").modal("show"); </script>';

} 


?>
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnGuardar" name="btnGuardarInsumoProducto" class="btn btn-success" onclick="">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
</form> 
            </div>
            </form>
        </div>
    </div>      
</div>




<div class="modal fade in" id="ModalEliminarInsumoProducto" role="dialog" data-backdrop="static">
    <div class="modal-dialog">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>DESEA ELIMINAR EL INSUMO <span id="nombreInsumoE"></span></b></h4>

            </div>
            <div class="modal-body">
               <form action="" id="" enctype="" method="POST"> 
                  <input type="hidden" id="idInsumoEliminar" name="idInsumoEliminar">
            </div>
            <div class="modal-footer">
                <button type="submit" name="btnEliminarInsPro" class="btn btn-success">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
            </div>
            </form>
        </div>
    </div>      
</div>




<div class="modal fade in" id="ModalModificarCantidadInsumo" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>MODICAR LA CANTIDAD AL INSUMO <span id="nombreInsumo"></span></b></h4>

            </div>
            <div class="modal-body">
     <form action="" id="" enctype="" method="POST"> 
    
            <div class="form-group">
              <input type="hidden" name="idInsumoProducto" class="form-control" >

            <label for="CantidadInsumo">CANTIDAD</label>
              <input type="text" name="CantidadRelInsPro" class="form-control" >
            </div>
        </div>
         <div class="modal-footer">
                <button type="submit" id="btnGuardar" name="bnModificarCantidadRelPro" class="btn btn-success" onclick="">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">VOLVER</button>                        
              </form> 
            </div>
    </div>      
</div>


