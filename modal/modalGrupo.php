
<div class="modal fade in" id="ModalaAgregarGrupo" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align: center"><b>AGREGAR GRUPO AL PRODUCTO</b></h4>

            </div>
            <div class="modal-body">
     <form action="" id="formulario" enctype="multipart/form-data" method="POST"> 
      <input type="hidden" id="idProducto" name="producto">         
<table id="ghatable" class="ghatable display table table-bordered table-stripe table-hover table-responsive" cellspacing="0" width="100%"> <!--jquery.dataTables.min.js -->
     
     <thead style="text-align: center">
          
               <th>CODIGO</th>
               <th>NOMBRE</th>
               <th>ORDEN</th>
               <th>OPERACION</th>
               <th>SELECCIONAR</th>
               <th>FACTOR</th>
         

           
     </thead>
     <tbody>
         <?php
                     $con = new Conexion();
                $conexcion = $con->ConexionDB() ;
                $insumos = new GRUPOS_MYSQL($con);
                 $listainsumo = $insumos->todo();
                for ($i=0; $i <count($listainsumo) ; $i++) { 
                  
                  echo '<tr  style="  text-align: center;">
                  <td>'.$listainsumo[$i]->COD_GRUPO.'
                  <td>'.$listainsumo[$i]->NOM_GRUPO.'
                  <td>'.$listainsumo[$i]->ORDEN.'
                  <td><button class="btn btn-success" >eliminar</button>
                  <td><input type="checkbox" >
                  <td><input type="text">
                   
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